$(document).ready(function(){
    $("span.alink").click(function(){
        document.location.href = $(this).data("url");
    });

	if ($('select[name=region_select]').val() == '0') $('div.city_listblock select').attr('disabled',"disabled");
	
	//Быстрый просмотр
	jQuery("body").on("click",".quick_preview_button",function(event){
        event.stopPropagation();
        event.preventDefault();
        var data = {
			'ID' : jQuery(this).attr("data-id"),
            'pxajax' : 'Y'
        }
        openPopupForm('quick_preview', data);

		//Проверяем, существует ли блок с большой фотографией...
		var timer = 0;
		var isImageExist = function() {
			//...и заменяем src фотографии на href первой превьюшки (если они есть)
			if (jQuery("#image").length > 0) {
				if (jQuery(".images").length > 0) {
					jQuery('.fancybox-skin #image').find('img').attr('src', jQuery('.images div').first().find('a').attr('href'));
				}
				clearInterval(timer);
				//Вставляем в конец преьюшек <div><a href="#video_key0">, чтобы переключение картинок зацикливалось
				if(jQuery('.images div[href="#video_key0"]').length == 0) {
					jQuery('.fancybox-skin .images').append('<div><a href="#video_key0" rel="prevgal" class="image fancybox-prev-min"></a></div>')
				}
			}
		};
		timer = setInterval(isImageExist, 1000);
    });
	
	function openPopupForm(filename,post){
        post = typeof post !== 'undefined' ? post : '';
        //console.log(post);
        $.ajax({
            type	: "POST",
            cache	: false,
            url	: "/ajax/"+filename+".php",
            data	: post,
            success	: function(data) {
                $.fancybox(data, {
					padding: 0,
					wrapCSS: 'quick-preview-popup',
					scrolling: 'no',
					autoScale: false,
					autoDimensions: false,
					fitToView: false,
					tpl: {
						closeBtn: '<a title="Закрыть" class="fancybox-item fancybox-close" href="javascript:;">Закрыть</a>'
					}
                });
            }
        });
    }

	//Заменяем src большой фотографии при нажатии на превьюшки
	jQuery(document).on('click touchstart', '.fancybox-skin a.image', function(event) {
		//Если в превьюшке видео, кликаем по первой превьюшке
		if (jQuery(this).attr('href') == '#video_key0') {
			jQuery('#image').find('img').attr('src', jQuery('.images div').first().find('a').attr('href'));
		} else {
			jQuery('#image').find('img').attr('src', jQuery(this).attr('href'));
		}
		return false;
	});

	//При нажатии на большую фотографию переходим к следующей
	jQuery(document).on('click touchstart', '.fancybox-skin #image a', function(event) {
		var next_image = jQuery(this).find('img').attr('src');
		var new_image = jQuery('.images div a[href="'+next_image+'"]').parent('div').next().find('a').attr('href');
		//Если видео, переходим к первой
		if (new_image == '#video_key0') {
			jQuery('#image').find('img').attr('src', jQuery('.images div').first().find('a').attr('href'));
		} else {
			jQuery('#image').find('img').attr('src', new_image);
		}
		return false;
		//Почему бы просто не сделать .click() на превьюшке? Да потому что на айОС не работает >.<
	});

	jQuery(document).on('click touchstart', '.fancybox-skin .catalog_detail_link', function(event) {
		//console.log('clicked!');
		$.fancybox.close();
	});
});

$('select[name=region_select]').live('change', function(){
	//console.log('press ');
	if ($('select[name=region_select]').val() != '0') get_city();
	else {
		$('div.city_listblock select').attr('disabled',"disabled");
		$(this).addClass('error');
		$('div.city_listblock select').find('option[value=0]').attr('selected', 'selected');
	}
});
$('table#sale_order_props input.error').live('focus', function(){
	$(this).removeClass('error');
});
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
}
$('div.city_listblock select').live('change', function(){
	var newidcity = 'city' + $('div.city_listblock select').val();
	var oldidcity = $('div.city_listblock select').attr('id');

	if ($('div.city_listblock select').val() != '0' && $('div.city_listblock select').attr('id') != newidcity) {
		$('div.city_listblock select').attr('id', newidcity);
		//console.log(newidcity);
		//console.log(oldidcity);
		if (newidcity != 'city0' && newidcity != oldidcity && oldidcity != 'city01') {
			//console.log('press 222');
			$('div.city_listblock select').removeClass('error');
			submitForm();
		}
	} else {
		$('div.city_listblock select').addClass('error');
	}
});
function get_city() {
	var region_id = $('select[name=region_select]').val();
	$("img#loader_city").show();
	$('select[name=region_select]').removeClass('error');
	$('select[name=region_select]').attr('disabled',"disabled");
	$('div.city_listblock select').attr('disabled',"disabled");
	$.ajax({
		type: "POST",
		url: "/bitrix/templates/whogrill.ru/components/bitrix/sale.ajax.locations/popup/get_city_list.php",
		data: 'REG_ID=' + region_id,
		success: function(result) {
			$("img#loader_city").hide();
			$('div.city_listblock select').removeAttr('disabled');
			$('select[name=region_select]').removeAttr('disabled');
			$('div.city_listblock select').html(result);
			$("div.city_listblock select").addClass('error').attr('id', 'city0');
			$('select').add("div.city_listblock select");
		}
	});
}

$("#order_form_div .sale_order_table label").live('click', function() {
	console.log("Use ON");
	$(this).closest("table").find("input").removeAttr('checked');
	$(this).find("input").attr("checked", "checked");
	//console.log("input PAY_SYSTEM_ID: " + $("input[name=PAY_SYSTEM_ID]:radio:checked").val());
	$(this).closest("table").find("label").removeClass('select_api_input');
	$(this).addClass("select_api_input");
	submitForm();
});
