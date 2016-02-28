$(function () {

    $("input,textarea").jqBootstrapValidation({
        submitError: function ($form, event, errors) {},
        submitSuccess: function ($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();
            var subject = $("input#subject").val();
            var gotcha = $("input#gotcha").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "http://formspree.io/andrew@andrew-lord.co.uk",
                method: "POST",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
                    _subject: subject,
                    _gotcha: gotcha
                },
                cache: false,
                success: function () {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. Thank you for contacting me, I will get back to you shortly.</strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                    $('.form-control').each(function (index) {
                        $(this).trigger("change");
                    });
                },
                error: function () {
                    // Fail message
                    $('#success').html("<div class='alert alert-warning'>");
                    $('#success > .alert-warning').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-warning').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-warning').append('</div>');
                },
            })
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });
});


$('.form-control').each(function (index) {
    $(this).focus(function () {
        $('#success').html('');
    });
});
