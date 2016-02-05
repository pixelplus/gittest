$(document).ready(function(){
    $('div.popup input[name="phone"]').mask('+7 (999) 999-99-99');
	
	$(window).resize(function () { 
		var widthbraus = $(window).width()/2 - 260;
		$('div.popup.reg_form').css("left", widthbraus) ;
	}); 
	
	//script for popups
	$('a.show_popup').click(function () {
		var widthbraus = $(window).width()/2 - 260;
		$('div.'+$(this).attr("rel")).fadeIn(500).css("left", widthbraus) ;
		$("body").append("<div id='overlay'></div>");
		$('#overlay').show().css({'filter' : 'alpha(opacity=80)'});
		return false;				
	});	
	$("a.close, div#overlay").click(function () {
		$("div.popup.reg_form").fadeOut(100);
		$('#overlay').remove('#overlay');
		return false;
	});
	
	/*
	 * Џроверка валидности заполнения формы
	 */
	$("input[name=usname]").focus(function(){
		$("input[name=usname]").removeClass('error');
	});
	$("input[name=phone]").focus(function(){
		$("input[name=phone]").removeClass('error');
	});

	$("form[name=fastOrder]").submit(function(event){
		var canSend = true;
		if(!$("input[name=usname]").val()){	
			event.preventDefault();	
			canSend = false;
			$("input[name=usname]").addClass('error'); 
		}
		if($("input[name=phone]").val().length < 18){	
			event.preventDefault();	
			canSend = false;
			$("input[name=phone]").addClass('error'); 
		}
		
		if (!canSend)
		{
			event.preventDefault();
		} else {
			var fio = $("input[name=usname]").val();
			var phonen = $("input[name=phone]").val();
			var product = $("input[name=id_tovar]").val();
			var userid = $("input[name=id_user]").val();
			$("input[name=usname]").val('');
			$("input[name=phone]").val('');
			ajax1(fio, phonen, product, userid);
			event.preventDefault();
		}
	});
});

function ajax1(fio, phonen, product, userid) {
	 $.ajax({
		type: "POST",
		url: "/ajax/fast-order.php",
		data: "name="+fio + "&phone="+phonen + "&id_tovar="+product + "&id_user="+userid,
		success: function(data) {
			$("div.popup-result").html(data).fadeIn().delay(6000).fadeOut();
			setTimeout(function() { $("a.close").click(); }, 6000);
		}
	});
}
