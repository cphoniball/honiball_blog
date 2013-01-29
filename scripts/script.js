$(document).ready(function() {

	/////////////////////////
	//sidebar scripts 
	////////////////////////
	
	$(".dropdown button").click(function() {
		$(this).next().slideToggle(200);
	});
	
	$("#search button").click(function() {
		$(this).next().slideToggle(200);
	});
	
	$('#searchform a').click(function() {
		$('#searchform input').slideToggle(200); 
	});
	
	$('.header-item').click(function() {
		$('nav li.cat-item').slideToggle(200);
	});
	

	////////////////////////
	//Function declarations for the slideshow on the portfolio pages
	///////////////////////
	
	var $imgs = $('.slideshow p img')
	var fadeDuration = 400; 
	
	//initialization script for the slideshow on portfolio pages
	//to be executed on page load
	function initSlideshow() {
		//fading in the first image
		$imgs.first().fadeIn(fadeDuration).addClass('curImage');
		//setting the height of the slideshow and the controls
		showWidth = $('.slideshow').width(); 
		$('.slideshow').add('.slideControl').height(showWidth * (2 / 3)); 
		//removing the paragraph tags around images in wordpress
		$imgs.unwrap();
		//strip the height and width of the images
		//IMPORTANT - need to figure out a way to fix this with php
		$imgs.each(function() {
			$(this).removeAttr('height').removeAttr('width');
		}); 
	}
		
	simulated = false; 
	
	//slideshow
	//controls the auto-advancing slideshow
	//starts it if not playing, stops if playing 
	//ags: animDuration, controls the duration of the fade animation
	//	   slideDuration, controls how long each image appears
	function slideshow(animDuration, slideDuration) {
		if (simulated) {
			simulated = false;
			clearInterval(slideshowTimeout); 
		}
		else {
			$('.slides img').first().fadeOut(fadeDuration).appendTo('.slides');
			$('.slides img').first().fadeIn(fadeDuration);
			slideshowTimeout = setInterval(function() {
				simulated = true; 
				$('.slides img').first().fadeOut(fadeDuration).appendTo('.slides');
				$('.slides img').first().fadeIn(fadeDuration);
			}, slideDuration);
		}
	}
	
	////////////////////////
	//function initializations for the slideshow
	///////////////////////
	
	initSlideshow();
	$slideshowImg = $('.slideshow img').remove('slideControl img');

	$('.next').click(function(event) {
		event.preventDefault(); 
		$('.slides img').first().fadeOut(fadeDuration).appendTo('.slides');
		$('.slides img').first().fadeIn(fadeDuration);
	}); 

	$('.prev').click(function(event) {
		event.preventDefault(); 
		$('.slides img').first().fadeOut(fadeDuration);
		$('.slides img').last().prependTo('.slides').fadeIn(fadeDuration);
	});
	
	//keydown functions for the slideshow
	$(window).keydown(function(event) {
		if (event.which == 37) { //left arrow event
			event.preventDefault(); 
			$('.slides img').first().fadeOut(fadeDuration);
			$('.slides img').last().prependTo('.slides').fadeIn(fadeDuration);
		}
		else if (event.which == 39) { //right arrow event
			event.preventDefault(); 
			$('.slides img').first().fadeOut(fadeDuration).appendTo('.slides');
			$('.slides img').first().fadeIn(fadeDuration);	
		}
		else if (event.which == 13) { //enter key event - toggle the slideshow start/stop
			slideshow(400, 3000); 
		}
	});
	
	
});