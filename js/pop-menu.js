$(document).ready(function() {
	var firstLi = $('.nav li:first-child');
	var triangle = $('.icon.arr.to-top');
	if (firstLi.hasClass('active')) {
		triangle.addClass('blue');;
	} else {
		triangle.removeClass('blue');
	}

	$('#menu').on('click', function()  {
		if ($('#pop-nav').css('display') === 'none') {
			$('#header .arr').fadeIn();
			$('#pop-nav').fadeIn();
		} else {
			$('#header .arr').fadeOut();
			$('#pop-nav').fadeOut();
		}
	});
});