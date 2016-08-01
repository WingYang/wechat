// JavaScript Document

$(document).ready(function() {
	var Width = $(window).width();
    $('body').width(Width);
	
	$('.footer img').click(function() {
		$('.choice').css('display','block');
    });
});