$(document).ready(function() {
	$('#file-inp').change(function(){
		$('#file-name').html($(this).val());
		$('#file-inp').attr('value', $(this).val());
		if ($(this).val() == '') {
			$('#file-name').html('Ошибка. Повторите еще раз.');
		}
	});

	$('#add-btn').on('click', function(){
		$('#mask').fadeIn();
		$('#add-project').fadeIn();
	});

	$('.icon.close').on('click', function(){
		$('#add-project').fadeOut();
		$('#mask').fadeOut();
		$('.field').val('');
		$('#file-inp').attr('value', '');
		$('#file-name').html('Загрузите изображение');
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