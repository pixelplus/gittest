jQuery(document).ready(function(){
				/*jQuery("body").on("click",".images .image",function(){
					//event.preventDefault();
					jQuery(".images .image").each(function(){jQuery(this).removeClass("sel")});
					jQuery(this).addClass("sel");
					//MagicZoomPlus.start();
					//MagicZoomPlus.refresh();
					//MagicZoom.stop(document.getElementById('zoom'));
					/*jQuery("#image img").attr('src',jQuery(this).attr('rel'));
							jQuery("#image a").attr('href',jQuery(this).attr('data-very-big'));
							jQuery(".MagicThumb-expanded img").attr('src',jQuery(this).attr('data-very-big'));*/
					//MagicZoom.start(document.getElementById('zoom'));
					//MagicThumb.refresh('zoom_id');
					//jQuery("#image img").css("margin-left",-(parseInt(jQuery("#image img").css("width"))/2)+"px").css("margin-top",-(parseInt(jQuery("#image img").css("height"))/2)+"px").css("visibility","visible");
					//return false;
				//});*/
				
			});
			
			var renew = false;
            function isHhistoryApiAvailable() {
                return !!(window.history && history.pushState);
            };

            function ajaxReload(url) {
                jQuery("body").off('set', '#range');
                jQuery(".loading_fader").fadeIn(200);
                $.ajax({
                    url: url,
                    success: function (data) {
                        jQuery('.wrap').html(jQuery(data).filter(".wrap").html());
                        document.title = jQuery(data).filter("title").html();
                        startAfterAjax(false);
                    }
                });


                // А вот так просто меняется ссылка
                if (url != window.location) {
                    window.history.pushState(null, null, url);
                }
				
                // Предотвращаем дефолтное поведение
                return false;
            }
            ;

            

            function startAfterAjax(renew_inner) {
                renew = renew_inner; 
				//list catalog page

                //$('.coreUISelect').coreUISelect();
                jQuery("select[name=SECTION]").coreUISelect({onChange: function () {
                    if (isHhistoryApiAvailable()) {
                        ajaxReload(jQuery("select[name=SECTION]").val())
                    }
					else{window.location.href = jQuery("select[name=SECTION]").val()}
				}}
				);
				jQuery("select[name=SORT_TYPE]").coreUISelect({onChange: function () {
					if (isHhistoryApiAvailable()) {

						if (jQuery("select[name=SORT_TYPE]").val() == "price_desc") {
							$.cookie('SORT', 'desc', { expires: 7, path: '/' });
							$.cookie('SORT_P1', 'price', { expires: 7, path: '/' });
						} else if (jQuery("select[name=SORT_TYPE]").val() == "sort_asc") {
							$.cookie('SORT_P1', '', { expires: 7, path: '/' });
							$.cookie('SORT', '', { expires: 7, path: '/' });
						} else {
							$.cookie('SORT', '', { expires: 7, path: '/' });
							$.cookie('SORT_P1', 'price', { expires: 7, path: '/' });
						}

						ajaxReload(document.URL)
					} else {
						window.location.href = document.URL
					}
				}});

            var timeOut = null;

            function reloadFilter(ob) {
				if (isHhistoryApiAvailable()) {
					ajaxReload(jQuery(ob).closest("form").attr("action").split('?')[0]+"?"+jQuery(ob).closest("form").serialize());
				}
				else{
					jQuery(ob).closest("form").submit();
				}
            }
            if ($('#range').length > 0) {
                $('#range').noUiSlider({
                    start: [parseInt(jQuery(".price_min_current").html()), parseInt(jQuery(".price_max_current").html())],
                    step: 10,
                    margin: 20,
                    connect: true,
                    direction: 'ltr',
                    orientation: 'horizontal',

                    behaviour: 'tap-drag',

                    range: {
                        'min': parseInt(jQuery(".price_min").html()),
                        'max': parseInt(jQuery(".price_max").html())
                    }
                }, true);

                jQuery("body").on('set', '#range', function () {
                    clearTimeout(timeOut);
                    var cached = jQuery(this);
                        timeOut = setTimeout(function () {
                            reloadFilter(cached)
                        }, 1000);
                });

                $("#range").Link('upper').to('-inline-<input type="text" name="arrFilter_P1_MAX"/>', function (value) {
                    $(this).val(parseInt(value));
                });
                $("#range").Link('lower').to('-inline-<input type="text" name="arrFilter_P1_MIN"/>', function (value) {
                    $(this).val(parseInt(value));
                });
            }
            ;

            //detail catalog page
			MagicZoomPlus.start();
			$('.fancybox').fancybox({
				scrollOutside: 'true',
				scrolling: 'visible'
			});
			$('.fancybox-prev-min').fancybox({
				scrollOutside: 'true',
				scrolling: 'visible'
			});
			jQuery(document).ready(function(){
				function show_movie(p, idvid){ 
					$.ajax({
						type: "POST",
						url: "/ajax/show_movie.php",
						data: "path="+p,
						success: function(data) {
							//alert("Подписка добавлена");
							$('#mov-kont'+idvid).html(data);
						}
					});			
				}
				$('div[id ^= mov-kont]').each(function(indx){
					var paramsrc = $(this).attr('rev');
					var paramnum = $(this).attr('alt');
					show_movie(paramsrc, paramnum);
				});
				/*$('.images a.image').mouseenter(function(){
					$('.images').find('a.image.sel').removeClass('sel');
					$(this).addClass('sel');
					return true;
				});*/
			});
			//MagicZoomPlus.refresh();
            /*jQuery(".images .image").click(function () {
                jQuery(".images .image").each(function () {
                    jQuery(this).removeClass("sel")
                });
                jQuery(this).addClass("sel");
				//MagicZoomPlus.stop();
                //MagicZoom.stop(document.getElementById('zoom'));
                jQuery("#image img").attr('src', jQuery(this).attr('rel'));
                jQuery("#image a").attr('href', jQuery(this).attr('data-very-big'));
                jQuery(".MagicThumb-expanded img").attr('src', jQuery(this).attr('data-very-big'));
                //MagicZoom.start(document.getElementById('zoom'));
                //MagicThumb.refresh('zoom_id');
                jQuery("#image img").css("margin-left", -(parseInt(jQuery("#image img").css("width")) / 2) + "px").css("margin-top", -(parseInt(jQuery("#image img").css("height")) / 2) + "px").css("visibility", "visible");
                return false;
            });*/

            jQuery("form.detail_form").submit(function (event) {
                jQuery.ajax({
                    url: "/ajax/basket.php",
                    type: "POST",
                    data: jQuery(this).serialize()
                }).done(function (data) {
                        jQuery(".basket_to_replace").html(data);
                    });
                jQuery(".to_basket_to_replace", this).replaceWith('<td colspan="2" align="left"><a class="already_bought" href="/personal/basket/">В корзине</a></td>');
                event.preventDefault();
                return false;
            });

            setTimeout(function () {
                //jQuery("#image img").css("margin-left", -(parseInt(jQuery("#image img").css("width")) / 2) + "px").css("margin-top", -(parseInt(jQuery("#image img").css("height")) / 2) + "px").css("visibility", "visible");
				jQuery("#image img").css("visibility", "visible");
	            jQuery('#image').find('img').attr('src', jQuery('.images div').first().find('a').attr('href'));
	            if(jQuery('.images div[href="#video_key0"]').length == 0) {
		            jQuery('.images').append('<div><a href="#video_key0" rel="prevgal" class="image hidden"></a></div>')
	            }
            }, 1000);

            jQuery(document).on('click touchstart', '#image a', function(event) {
	            //console.log('clicked');
	            var next_image = jQuery(this).find('img').attr('src');
	            var new_image = jQuery('.images div a[href="'+next_image+'"]').parent('div').next().find('a').attr('href');
	            //Если видео, переходим к первой
	            if (new_image == '#video_key0') {
		            jQuery('#image').find('img').attr('src', jQuery('.images div').first().find('a').attr('href'));
	            } else {
		            jQuery('#image').find('img').attr('src', new_image);
	            }
	            return false;
            });

            function declOfNum(number, titles) {
                cases = [2, 0, 1, 1, 1, 2];
                return titles[ (number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5] ];
            }
            var el = null;
            jQuery("body").on("click", ".add_to_compare", function (event) {
                event = event || window.event;
                jQuery(this).replaceWith('<a class="compare_link_add" href="/compare/">К сравнению<span class="compare_link_add_right">&nbsp;</span></a>');
                el = jQuery(this);
                jQuery.ajax({
                    url: "/ajax/add_to_compare.php",
                    type: "POST",
                    data: "action=ADD_TO_COMPARE_LIST&id=" + el.attr("data-id")
                }).done(function (data) {
                        var count = parseInt(data);
                        jQuery(".catalog-compare-list-top").html('<a class="compare_link" href="/compare/">В списке сравнения ' + count + ' ' + declOfNum(count, ['товар', 'товара', 'товаров']) + '<span class="r_comp">&nbsp;</span></a>');
                    });

                if (event.preventDefault) {
                    event.preventDefault();
                } else {
                    event.returnValue = false;
                }

            });



            }
            ;

            jQuery(document).ready(function () {
                jQuery("select[name=SECTION]").coreUISelect({onChange: function () {
                    if (isHhistoryApiAvailable()) {
                        ajaxReload(jQuery("select[name=SECTION]").val())
                    }
					else{window.location.href = jQuery("select[name=SECTION]").val()}
					}
				});
				jQuery("select[name=SORT_TYPE]").coreUISelect({onChange: function () {
					if (isHhistoryApiAvailable()) {

						if (jQuery("select[name=SORT_TYPE]").val() == "price_desc") {
							$.cookie('SORT_P1', 'price', { expires: 7, path: '/' });
							$.cookie('SORT', 'desc', { expires: 7, path: '/' });
						} else if (jQuery("select[name=SORT_TYPE]").val() == "sort_asc") {
							$.cookie('SORT_P1', '', { expires: 7, path: '/' });
							$.cookie('SORT', '', { expires: 7, path: '/' });
						} else {
							$.cookie('SORT_P1', 'price', { expires: 7, path: '/' });
							$.cookie('SORT', '', { expires: 7, path: '/' });
						}

						ajaxReload(document.URL)
					} else {
						window.location.href = document.URL
					}
				}});
				
            })
            ;

            if (isHhistoryApiAvailable()) {
                $(document).ready(function () {
                    jQuery(document).on("click", "a[href^='/gril']:not('.parent')", function () {
                        event.preventDefault();
						$("div.red_menu div.special_hover").removeClass("special_hover");
                        ajaxReload($(this).attr('href'));
			window.scrollTo(0,0);
                    });
                });
                $(window).bind('popstate', function () {
                    jQuery(".loading_fader").fadeIn(200);
                    $.ajax({
                        url: location.pathname,
                        success: function (data) {
                            $('.wrap').html(jQuery(data).filter(".wrap").html());
                            document.title = jQuery(data).filter("title").html();
                            startAfterAjax(false);
                        }
                    });
                });
            }
            ;
            jQuery(document).ready(function () {
                $('.coreUISelect').coreUISelect();
            });