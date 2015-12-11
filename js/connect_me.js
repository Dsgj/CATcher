/*
 Jquery Validation using jqBootstrapValidation
 example is taken from jqBootstrapValidation docs
 */
$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var email = $("input#email").val();
            var ident = $("input#ident").val();
            var sex = $("input#sex").val();
            var breed = $("input#breed").val();
            var address = $("input#address").val();
            var lat = $("input#lat").val();
            var lng = $("input#lng").val();
            var info = $("textarea#info").val();
            var catName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (catName.indexOf(' ') >= 0) {
                catName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "./bin/connect.php",
                type: "POST",
                data: {
                    email: email,
                    ident: ident,
                    name: name,
                    sex: sex,
                    breed: breed,
                    address: address,
                    lat: lat,
                    lng: lng,
                    info: info
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + catName + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com;>me@example.com</a> ? Sorry for the inconvenience!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});