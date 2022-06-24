$(function() {
    validateForm();
})

$("#email").keyup(function() {
    validateForm();
});

$("#email").change(function() {
    validateForm();
});

$("#email").click(function() {
    validateForm();
});

$("#password").keyup(function() {
    validateForm();
});

$("#password").change(function() {
    validateForm();
});

$("#password").click(function() {
    validateForm();
});

function validateForm() {

    var email = $("#email").val();
    var submit = $("#submitbutton");

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

    if(valid && $("#password").val().length != 0) {

        if(!submit.hasClass("active")) {

            submit.addClass("active");
            submit.attr("type", "submit");

        }

    } else {
        
        if(submit.hasClass("active")) {

            submit.removeClass("active");
            submit.attr("type", "button");

        }
    }
}