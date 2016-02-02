$(document).ready(function() {
	var doc_h = $(window).height();
	$( window ).resize(function() {
		doc_h = $(window).height();
	});
	$('#fullpage').fullpage({
		anchors: ['slide1', 'slide2', 'slide3', 'slide4', 'slide5', 'slide6', 'slide7', 'slide8',],
    	menu: '#leftmenu',
        onLeave: function(index, nextIndex, direction){
            $(this).animate({top: "0"}, 500 );
			$('.subsection').css('z-index', '999')
			$('.menu_btn').removeClass('close');
			$('.menu_wrapper').slideUp();
        },
		afterLoad: function(anchorLink, index){
            $('.subsection').hide();
			$('.subsection_'+index).show();
        },
		afterRender: function(){
			setTimeout(function(){$('.section1 .text.ultra').addClass('active');}, 300)	
		}
    });
	$('.more').click(function() {
		$(this).parents('.section').animate({top: "-"+doc_h}, 500 );
		setTimeout(function(){$('.subsection').css('z-index', '1100')}, 1000);
		clearInterval(change_sliders)
	});
	$('.subsection .close_modal').click(function() {
		$('.section.active').animate({top: "0"}, 500 );
		$('.subsection').css('z-index', '999');
	});
	var change_sliders = setInterval(function(){$('.text.ultra').toggleClass('active'); $('.text.nabor').toggleClass('active'); $('.switch div').toggleClass('active'); $('.subsection_1 .content').toggleClass('selected');}, 6000)
	$('.switch .item_01').click(function() {
		$('.text.ultra').addClass('active');
		$('.text.nabor').removeClass('active');
	});
	$('.switch .item_02').click(function() {
		$('.text.ultra').removeClass('active');
		$('.text.nabor').addClass('active');
	});
	$('.switch div').click(function() {
		$('.switch div').removeClass('active');
		$(this).addClass('active');
		clearInterval(change_sliders);
		$('.subsection_1 .content').toggleClass('selected')
	});
	$(".video").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	/*$('.close').click(function(){
	});*/
	$('.section1').removeClass('active');
	$('.section1').addClass('active');
	$('.menu_btn').click(function(){
		$(this).toggleClass('close');
		$('.menu_wrapper').slideToggle();
	});
	$('.menu a').click(function(){
		setTimeout(function(){$('.menu_wrapper').slideUp();}, 500)
		$('.menu_btn').toggleClass('close');
	});
}); 