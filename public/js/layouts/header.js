onResize();
function onResize() {
    document.getElementById("main-content").style.marginTop = (document.getElementsByTagName("nav")[0].clientHeight) + "px";
}
$("#nav-toggle").click(function() {

    $("#nav-content-mobile").toggle();

    $(this).find("svg").toggleClass("hidden");

});