$(function() {
    validateForm();
})

$("#email").keyup(function() {
    validateForm();
});

$("#email").focus(function() {
    validateForm();
});

$("#email").blur(function() {
    validateForm();
});


function validateForm() {

    var email = $("#email").val();
    var submit = $("button#submit");

    var valid = true;

    if (email.indexOf('@') == -1) {

        valid = false;

    } else {

        var parts = email.split('@');
        var domain = parts[1];

        if (domain.indexOf('.') == -1) {

            valid = false;

        } else {

            var domainParts = domain.split('.');
            var ext = domainParts[1];

            if (ext.length > 4 || ext.length < 2) {

                valid = false;
            }
        }

    }

    if(valid) {
        if(!submit.hasClass("active")) {
            submit.addClass("active");
        }

    } else {
        if(submit.hasClass("active")) {
            submit.removeClass("active");
        }
    }
}