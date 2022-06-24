$(".project-item").click(function() {

    $(this).parent().hide();
    $(this).parent().prev().find("svg.up-icon").hide();
    $(this).parent().prev().find("svg.down-icon").show();

    $("#select-project").html($(this).html());
    
});
$("#new_project_name").keyup(function() {
    if($(this).val().length != 0) {
        $(this).next().addClass("active");
        $(this).next().attr("type", "submit");
    } else {
        $(this).next().removeClass("active");
        $(this).next().attr("type", "button");
    }
});