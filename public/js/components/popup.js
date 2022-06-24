$(".popup").click(function(event) {

    event.stopPropagation();

    $(this).find("span#pop").toggleClass("show");
})
$(window).click(function() {
    if($("#pop").hasClass("show")) {
        $("#pop").removeClass("show");
    }
});