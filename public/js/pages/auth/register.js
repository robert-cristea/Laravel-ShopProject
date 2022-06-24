var agreecheck;

$(function() {
    $("#select-profession-submit").val("");
    agreecheck = false;
    validateForm();
})
$("#firstname").keyup(function() {
    validateForm();
});
$("#lastname").keyup(function() {
    validateForm();
});
$("#email").keyup(function() {
    validateForm();
});
$("#password").keyup(function() {
    validateForm();
});
$("#address").keyup(function() {
    validateForm();
});
$("#postcode").keyup(function() {
    validateForm();
});
$("#city").keyup(function() {
    validateForm();
});
$("input:checkbox").change(function() {
    $(this).parent().toggleClass("active");
    validateForm();
})

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

    if($("#agreecheck").is(":checked") && valid && $("#firstname").val().length != 0 && $("#lastname").val().length != 0 && $("#password").val().length != 0 && $("#address").val().length != 0&& $("#postcode").val().length != 0&& $("#city").val().length != 0) {
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

$("input:radio").click(function() {

    if($("#pro").is(":checked")) {
        $("#company").prop("disabled", false);
        $("#select-profession-button").prop("disabled", false);
        $("#pro-insert-panel").show(500);
    } else {
        $("#company").prop("disabled", true);
        $("#select-profession-button").prop("disabled", true);
        $("#pro-insert-panel").hide(500);
    }

    if(!$(this).parent().parent().hasClass("active")) {

        $(this).parent().parent().toggleClass("active");
        $(this).parent().parent().siblings().toggleClass("active");

    }

});

$(".profession-item").click(function() {
    
    $(this).parent().hide();
    $(this).parent().prev().find("svg.up-icon").hide();
    $(this).parent().prev().find("svg.down-icon").show();
    $(this).parent().prev().find("span").html($(this).html());

    $("#select-profession-submit").val($(this).attr("id"));

    validateForm();
    
});
