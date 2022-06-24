$("#eye_fill").click(function() {
    $(this).hide();
    $("#eye_slash_fill").show();
    $("#password").attr("type", "text");
});
$("#eye_slash_fill").click(function() {
    $(this).hide();
    $("#eye_fill").show();
    $("#password").attr("type", "password");
});