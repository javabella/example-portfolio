$(document).ready(function() {
    var app = {
          
        initialize : function () {
            this.setUpListeners();
            $('input, textarea').placeholder();
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
 
            if( app.validateForm(form) === false ) return false;
 
        },
 
        validateForm: function (form){
            var inputs = form.find('.field');
            var valid = true;
            var inputFile = form.find('#file');
            var fields = $.merge(inputs, inputFile);

            

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
            var inputs = form.find('.field');
            var inputFile = form.find('#file');
            var fields = $.merge(inputs, inputFile);

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

