$(document).ready(function() {
    var app = {
          
        initialize : function () {
            this.setUpListeners();
        },
  
        setUpListeners: function () {
            $('form').on('submit', app.submitForm);
            $('form').on('reset', app.removeAllErrors);
            $('form').on('keydown', 'input', app.removeError);
            $('form').on('keydown', 'textarea', app.removeError);
            $('form').on('click', '#file-inp', app.removeError);
        },
  
        submitForm: function (e) {
            e.preventDefault();
             
            var form = $(this);
            var submitBtn = form.find('input[type="submit"]');
 
            if( app.validateForm(form) === false ) return false;

            submitBtn.attr('disabled', 'disabled');
            var str = form.serialize();

            $.ajax({
                url: '/contact-process',
                type: 'POST',
                data: str
            })
            .done(function(msg){
                console.log(msg);
                if (msg === "OK") {
                    var result = "Спасибо за заявку! Может быть когда-нибудь я Вам отвечу...";
                    $('#another-captcha').click();
                    $('input:not([class="btn"])').val('');
                    $('textarea').val('');
                    $('.info-block')
                        .removeClass('no-success')
                        .addClass('success')
                        .css('display','block')
                        .html(result);
                } else {
                    if (msg.search('картинки') >= 0) {
                        $('input[name="captcha_code"]')
                            .addClass('error')
                            .siblings('.tooltip').css('display', 'block');
                    } else if (msg.search('Email') >= 0) {
                        $('input[name="client-email"]')
                            .addClass('error')
                            .siblings('.tooltip').css('display', 'block');
                    } else {
                        $('.info-block')
                        .removeClass('success')
                        .addClass('no-success')
                        .css('display','block')
                        .html(msg);
                    }
                }
            })
            .always(function() {
                submitBtn.removeAttr('disabled');
            });
        },
 
        validateForm: function (form){
            var inputs = form.find('input:not([class="btn"]):not([type="file"])');
            var valid = true;
            var textars = form.find('textarea');
            var inputFile = form.find('#file');
            var fields = $.merge($.merge(inputs, textars), inputFile);

            

            app.removeAllErrors();
            

            $.each(fields, function(index, val) {
                var field = $(val);



                var hasFileInp = (field.find('#file-inp').length == 0) ? false : true;
                
                
                
                if (field.val().length === 0 && !hasFileInp) {
                   
                    field.addClass('error');
                    field.siblings('.tooltip').css('display', 'block');
                    
                    valid = false;
                } else {
                    field.removeClass('error');
                    field.siblings('.tooltip').css('display', 'none');
                    
                }

               

                //for input-file
                if (hasFileInp) {
                    var fieldForFile = field.find('#file-inp').attr('value');
                    if (fieldForFile.length === 0) {
                        field.addClass('error');
                        field.find('.tooltip').css('display', 'block'); 
                        valid = false;
                    } else {
                        field.find('.tooltip').css('display', 'none'); 
                    }

                }
            });
        
 
            return valid;
        },

        removeAllErrors: function(e) {
            var form = $(this);
            var inputs = form.find('input:not([class="btn"])');
            var inputFile = form.find('#file')
            var textars = form.find('textarea');
            var fields = $.merge($.merge(inputs, textars), inputFile);

            $.each(fields, function(index, val) {
                var field = $(val);
                field.removeClass('error');
                field.siblings('.tooltip').css('display', 'none');
                field.find('.tooltip').css('display', 'none'); //for input-file
            });
        },
 
        removeError: function () {

            $(this).removeClass('error');
            $(this).parent('#file').removeClass('error'); //for input-file
            $(this).siblings('.tooltip').css('display', 'none');
            $(this).find('.tooltip').css('display', 'none'); //for input-file
        }       
          
    }
  
    app.initialize();
});

