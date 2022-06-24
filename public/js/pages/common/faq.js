$(".select-item").click(function() {

    if($(this).next().css("display") == "none") {
        $(this).next().show(500);
        $(this).find("svg.down-icon").hide();
        $(this).find("svg.up-icon").show();
    } else {
        $(this).next().hide(500);
        $(this).find("svg.down-icon").show();
        $(this).find("svg.up-icon").hide();
    }

});