/*jslint browser: true*/
/*global $, jQuery, alert*/
$(function () {
	'use strict';
	$(window).scroll(function () {
		
		var navbar = $('.navbar');
		
		$(window).scrollTop() >= navbar.height() ? navbar.addClass('scrolled') : navbar.removeClass('scrolled');
		
		});

	// Deal With Tabs
	$('.tab-switch li').click(function () {
		// Add Selected Class To Active Link
		$(this).addClass('selected').siblings().removeClass('selected');
		// Hide All Divs
		$('.tabs-section .tabs-content > div').hide();
		// Show Div Connected With This Link
		$('.' + $(this).data('class')).show();
	});
	
	//Smoothly Scroll to element
	$('.links li a').click(function (e) {
		
		e.preventDefault();
	
		$('html, body').animate({
			
			scrollTop: $('#' + $(this).data('scroll')).offset().top + 1
			
		}, 1000);
	});
		
	// Scroll to top button
	var scrollButton = $('.scrollbtn');
	
	$(window).scroll(function () {
		
		$(this).scrollTop() >= 700 ? scrollButton.show() : scrollButton.hide();
	
	});
	
	scrollButton.click(function () {
		$('html,body').animate({ scrollTop : 0 }, 1000);
	});
	// Search bar
	$(".fa-search").click(function () {
		
    $(".container, .input").toggleClass("active");
		
    $("input[type='text']").focus();
		
  	});
	
	// Add Active Class On Navbar Links And Remove From Siblings
	
	$('.navbar li a').click(function () {

		$(this).addClass('active').parent().siblings().find('a').removeClass('active');
		
	});
	
	// Sync Navbar Links With Sections
	
	$(window).scroll(function () {
	
		$('.sync').each(function () {
		
			if ($(window).scrollTop() > $(this).offset().top) {
			
				var blockID = $(this).attr('id');
				
				$('.links a').removeClass('active');
				
				$('.links li a[data-scroll="' + blockID + '"]').addClass('active');
			
			}
			
		});
	
	});
	
	
	// Hide Placeholder On Focus & Reset On Blur
	
	var placeAttr = '';
	
	$('[placeholder]').focus(function (){
	
		placeAttr = $(this).attr('placeholder');
		
		$(this).attr('placeholder', '');
	}).blur(function () {
	
		$(this).attr('placeholder', placeAttr);
		
	});
	
	
});