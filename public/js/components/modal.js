var modal = $("#modal-wrapper");
var btn = $("#modal-trigger-button");
var span = $(".close");

btn.click(function() {
    modal.show();
});
span.click(function() {
    modal.hide();
})
$(window).click(function(event) {
    if(event.target == modal[0]) {
        modal.hide();
    }
});
