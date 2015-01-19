$(document).ready(function() {
	$('#file').change(function(){
		$('#file-name').html($(this).val());
	});

	$('#add-btn').on('click', function(){
		$('#mask').fadeIn();
		$('#add-project').fadeIn();
	});

	$('.icon.close').on('click', function(){
		$('#add-project').fadeOut();
		$('#mask').fadeOut();
	});

	
});