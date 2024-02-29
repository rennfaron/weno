$(document).ready(function(){
	/* Styling */
	$('nav.login ul li:first-child').addClass('first-child');
	$('p:last-child, nav.site li:last-child, .blog article:last-child, .sidebar li:last-child, .weno-blog-post:last-child, .our-team ul:last-child').addClass('last-child');
	$('#take-a-tour .xwide > .carousel:last-child').addClass('last-child');
	$('.contact p:has(input[type="submit"])').addClass('contact-submit');
	$('.contact input[type="submit"]').wrap('<div class="contact-submit-btn" />');
	$('.comment-body .reply').prev('p').addClass('last-child');
	$('.our-team ul:nth-child(odd)').addClass('odd-child');
	$('.inner-page td').has('em').addClass('table-header');
	
	/* iPhone override for button grey-out */
	if (document.addEventListener) {
		// if document supports resizeIframe (browser troubleshooting)
		document.addEventListener("touchstart", function() {},false);
	}
	
	/* Sticky Navigation Change on Scroll */
	$(document).scroll(function(){
		var change = $("#post-header").offset().top;
		if($(this).scrollTop() > change){   
			$("nav.site").addClass('blue-nav');
		}
		else{
			$("nav.site").removeClass('blue-nav');
		}
		/*
		var value = $(window).scrollTop();
		if ( value > 120 )
			$("nav.site").addClass('blue-nav');
		else
			$("nav.site").removeClass('blue-nav');
		*/
	});

	/* Tablet/Mobile Menu */
	$('html').click(function() {
		$('nav.site button.on').removeClass('on on-login').nextAll('ul').removeClass('on');
		$('nav.site button.tablet').text('Press Here To View Menu Information Or For Member Login');
		$('nav.site button.mobile').text('Press To Login Or View Menu Information');
		$('body.overlay').removeClass('overlay');
		$('nav.login.on').removeClass('on');
		$('.member-login a.on').removeClass('on');
	});
	$('nav.site button, .member-login a, nav.login').click(function(event){
		event.stopPropagation();
	});
	$('nav.site button.tablet').click(function(){
		if(!$(this).hasClass('on')){
			$(this).addClass('on').text('Please Select From The Menu Below').nextAll('ul').addClass('on').parent('nav').addClass('on');
			$('body').addClass('overlay');
			$('nav.login').removeClass('on');
		}
		else{
			$(this).removeClass('on on-login').text('Press Here To View Menu Information Or For Member Login').nextAll('ul').removeClass('on').parent('nav').removeClass('on');
			$('nav.login.on').removeClass('on');
			$('body').removeClass('overlay');
		}
	});
	$('nav.site button.mobile').click(function(){
		if(!$(this).hasClass('on')){
			$(this).addClass('on').text('Please Select From The Menu Below').nextAll('ul').addClass('on').parent('nav').addClass('on');
			$('body').addClass('overlay');
			$('nav.login').removeClass('on');
		}
		else{
			$(this).removeClass('on on-login').text('Press To Login Or View Menu Information').nextAll('ul').removeClass('on').parent('nav').removeClass('on');
			$('nav.login.on').removeClass('on');
			$('body').removeClass('overlay');
		}
	});
	/* Member Login */
	$('.member-login a').click(function(){
		$(this).parent().parent().removeClass('on');
		$('nav.site button.on').text('Log Into Weno Healthcare').addClass('on-login');
		if(!$(this).hasClass('on')){
			$('body').addClass('overlay');
		}
		else{
			$('body').removeClass('overlay');
		}
		$(this).toggleClass('on');
		$('nav.login').toggleClass('on');
		
	});
	$('.member-login a.on').click(function(){
		$('body.overlay').removeClass('overlay');
	});
			
	/* Go Back to Top button */
	$('.go-top').click(function(){
		$('html, body').animate({ scrollTop: 0 }, 500);
		/* Remove hashtag: */
		if (history.pushState) {
			// if history supports pushState
			history.pushState("", document.title, window.location.pathname);
		}
	});
			
	/* Animated Scroll */
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top - 57 /* offset pixels */}, 500);
		/* (optional) with hashtag: */
		var hashtag = $(this).attr("href").substr(1);
		window.location.hash=hashtag;
	});
	
	/* Carousel: Disable Autoplay */
	$.fn.carousel.defaults = {
		interval: false,
		pause: 'hover'
	}
	
	/* Contact Form: Client-side Validation */
	$('#contactform').validate();
	
	/* Placeholders for IE */
	if(!Modernizr.input.placeholder){
		$('[placeholder]').focus(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
				input.removeClass('placeholder');
			}
		}).blur(function() {
			var input = $(this);
			if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.addClass('placeholder');
				input.val(input.attr('placeholder'));
			}
		}).blur();
			$('[placeholder]').parents('form').submit(function() {
				$(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
					  input.val('');
					}
				})
		});
	}
});