$(function() {
    validateForm();
})

$("#subject").keyup(function() {
    validateForm();
});

$("#email").keyup(function() {
    validateForm();
});

$("#comment").keyup(function() {
    validateForm();
    
});

function validateForm() {

    var email = $("#email").val();
    var submit = $("button.email-send");

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

    if(valid && $("#subject").val().length != 0 && $("#comment").val() != "") {
        if(!submit.hasClass("active")) {
            submit.addClass("active");
        }

    } else {
        if(submit.hasClass("active")) {
            submit.removeClass("active");
        }
    }

    if($("#comment").val() != "") {
        $("#comment").addClass("border-b border-gray-400");
    } else {
        $("#comment").removeClass("border-b border-gray-400");
    }
}