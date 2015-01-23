$(document).ready(function() {
	$('#file-inp').change(function(){
		$('#file-name').html($(this).val());
		$('#file-inp').attr('value', $(this).val());
	});

	$('#add-btn').on('click', function(){
		$('#mask').fadeIn();
		$('#add-project').fadeIn();
	});

	$('.icon.close').on('click', function(){
		$('#add-project').fadeOut();
		$('#mask').fadeOut();
		$('input:not([class="btn"])').val('');
		$('textarea').val('');
		var errors = $('#add-project').find('.error')
		.removeClass('error');
		$.each(errors, function(index, val) {
            var field = $(val);
            field.removeClass('error');
            field.siblings('.tooltip').css('display', 'none');
            field.find('.tooltip').css('display', 'none'); //for input-file
        });
		
	});

	
});