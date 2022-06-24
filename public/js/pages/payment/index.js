$(function() {
    validateForm();
});

$(".pay-item").keyup(function() {
    validateForm();
});

$(".pay-item").change(function() {
    validateForm();
});

$("input:radio").click(function() {

    if($("#same").is(":checked")) {

        $("#panel_different").hide(500);

    } else {

        $("#panel_different").show(500);

    }

    if(!$(this).parent().parent().hasClass("active")) {

        $(this).parent().parent().toggleClass("active");
        $(this).parent().parent().parent().siblings().children().toggleClass("active");

    }

    validateForm();

});

function validateForm() {

    var same = $("#same").is(":checked");

    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var address = $("#address").val();
    var postcode = $("#postcode").val();
    var city = $("#city").val();

    var cardNumber = $("#cardnumber").val();
    var expirationDate = $("#expirationdate").val();
    var securityCode = $("#securitycode").val();

    var button = $("#paybutton");

    if((same || (firstname.length != 0 && lastname.length != 0 && address.length != 0 && postcode.length != 0 && city.length != 0)) && cardNumber.length != 0 && expirationDate.length != 0 && securityCode.length != 0) {
        
        if(!button.hasClass("active")) {
            button.addClass("active");
            button.attr("type", "submit");
        }

    } else {
        if(button.hasClass("active")) {
            button.removeClass("active");
            button.removeClass("type", "button");
        }
    }

}