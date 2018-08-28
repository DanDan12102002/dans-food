jQuery(document).ready(function(){
	// SEND FORMS
	jQuery('.send-ajax').click( function() {
		var form = jQuery(this).closest('form');
		var thanks = jQuery(this).data('thanks');
		
		if ( form.valid() ) {
			form.css('opacity','.5');
			var actUrl = form.attr('action');

			jQuery.ajax({
				url: actUrl,
				type: 'post',
				dataType: 'html',
				data: form.serialize(),
				success: function(data) {
					if ( thanks ) {
						$('.modal').modal('hide');
						$(thanks).modal('show');
						
						setTimeout(function(){
							$(thanks).modal('hide');
						},3000);
					} else {
						form.html(data);
					}
					
					form.css('opacity','1');
				},
				error:	 function() {}
			});
		}
	});
	
	jQuery('.send').click( function() {
		var form = jQuery(this).closest('form');
		
		if ( form.valid() ) {
			form.submit();
		}
	});
	
	/*
		Slide to block. Add class "go-to-block" to link or button and data-attribute with target class or id
		Example: <a href="#" class="go-to-block" data-target=".slide-1">Slide</a>
	*/
	
	jQuery(".go-to-block").click(function() {
		var target = jQuery(this).data('target');
		
	    jQuery('html, body').animate({
	        scrollTop: jQuery(target).offset().top - 30
	    }, 800);
	});
	
	/*jQuery(".cov").click(function() {
		var target = jQuery(this).data('gallery');
		$(".carousel-item.active img").attr("src", target);
	});*/
	
	/*var src = $(".home .header logo a img").attr('src', './assets/images/main/logo-black.png');
	console.log(src);
	*/
	$(window).scroll(function () {
		if ($(window).scrollTop() >= 400) {
			$('header').css("position", "fixed");
			$('header').css("box-shadow", "rgba(0, 0, 0, 0.75) 0px -5px 15px 0px");
			$('.header').css("background-color", "#fff");
			$('.header .menu_web .menu .flex li a').css("color", "#000");
			$('.header .menu_web .logo a').css("color", "#000");
			$('.up').css("display", "flex");
			$('.ham').css("color", "#000");
			$('.header .r2 .logo a').css("color", "#000");
		} else if ($(window).scrollTop() <= 50) {
			$('.up').css("display", "none");
			$('.header').css("background", "none");
			$('.header').css("box-shadow", "none");
			$('.header .menu_web .menu .flex li a').css("color", "#fff");
			$('.header .menu_web .logo a').css("color", "#fff");
			$('header').css("position", "absolute");
			$('.header .r2 .logo a').css("color", "#fff");
			$('.header .ham').css("color", "#fff");
		}
	});

	$(function () {
		$('#datetimepicker1').datetimepicker({
			defaultDate: "1/6/2018",
			 locale: 'ru',
				format: 'L'
		});
	});
	
	$(".slick").slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	});
	
	new WOW().init();
});