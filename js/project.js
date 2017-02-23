/* global $ */
// validate Project form
$(function() {
    $('#project').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            borrowerName: {
                required: true
            },
            propertyType: {
                required: true
            },
            purchasePrice: {
                required: true
            },
            typeOfLoan: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name!",
                minlength: "your name must consist of at least 2 characters"
            },
            email: {
                required: "Please enter valid email address!"
            },
            borrowerName: {
                required: "Please select one of the options!"
            },
            propertyType: {
                required: "Please select one of the options!"
            },
            purchasePrice: {
                required: "Please select one of the options!"
            },
            typeOfLoan: {
                required: "Please select one of the options!"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"js/project.php",
                success: function() {
                    $('#project :input').attr('disabled', 'disabled');
                    $('#project').fadeTo( "slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#project').fadeTo( "slow", 0.15, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});