$(".select-button").click(function(event) {

    event.stopPropagation();

    $(this).next().toggle();
    if($(this).next().css("display") == "none") {
        $(this).find("svg.up-icon").hide();
        $(this).find("svg.down-icon").show();
    } else {
        $(this).find("svg.up-icon").show();
        $(this).find("svg.down-icon").hide();
    }

});
$(window).click(function() {

    $(".select-button").each(function() {
        $(this).next().hide();
        $(this).find("svg.up-icon").hide();
        $(this).find("svg.down-icon").show();
    });
});