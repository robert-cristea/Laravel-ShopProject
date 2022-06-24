var step = 0;
var next = false;
var submit = false;

var selected;

var price;
var dimension_price = [0, 0, 0];

var options = ["joinery", "material", "range", "opening", "leave", "installation" ,"dimension", "insulation", "aeration", "glazing", "color"];

var height_prices = [];
var width_prices = [];
var insulation_prices = [];

var dimension_options = ["height_size", "width_size", "insulation_size"];
var dimensions = ["", "", ""];

var selectProject = false;


$(function() {

    if($("#joinery").find("div.active").length != 0) {
        
        step = 1;
        selected = [$("#joinery").find("div.active").find("p").first().html(), "" ,"" ,"", "", "", "", "", "", "", ""];
        price = [$("#joinery").find("div.active").find("p").last().html(), 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        
        totalPriceCalculate();

        $("#joinery_result_wrapper").show();
        $("#joinery_result").html($("#joinery").find("div.active").find("p").first().html());
        $("#joinery_submit").val($("#joinery").find("div.active").attr("id"));
        $("#material").show();

    } else {
        selected = ["", "" ,"" ,"", "", "", "", "", "", "", ""];
        price = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
    }

    $(".height_price").each(function() {
        height_prices.push([$(this).attr("id"), $(this).html()]);
    });
    $(".width_price").each(function() {
        width_prices.push([$(this).attr("id"), $(this).html()]);
    });
    $(".insulation_price").each(function() {
        insulation_prices.push([$(this).attr("id"), $(this).html()]);
    });

    toggle();

});

$(".select-item").click(function() {

    if($(this).next().css("display") == "none") {
        $(this).next().show(500);
        $(this).find("svg.plus-icon").hide();
        $(this).find("svg.minus-icon").show();
    } else {
        $(this).next().hide(500);
        $(this).find("svg.plus-icon").show();
        $(this).find("svg.minus-icon").hide();
    }
});

$("#follow_button").click(function() {

    if(submit) {

        $(this).attr("type", "submit");

    }

    if(next) {

        $("#" + options[step + 1]).show();
        step ++;
        next = false;
    }

    toggle();

});

$(".type-select").click(function() {

    $(this).siblings(".active").removeClass("active");
    $(this).addClass("active");

    var changedIndex;

    for(var i = 0 ; i < options.length ; i ++) {
        if($(this).parent().parent().parent().attr("id") === options[i]) {
            changedIndex = i;
        }
    }

    var changedName = $(this).find("p").first().html();
    var changedPrice = $(this).find("p").last().html();

    selected[changedIndex] = changedName;
    price[changedIndex] = changedPrice;

    $("#" + options[changedIndex] + "_result_wrapper").show();
    $("#" + options[changedIndex] + "_result").html(changedName);
    $("#" + options[changedIndex] + "_result_finish").html(changedName);
    $("#" + options[changedIndex] + "_submit").val($(this).attr("id"));

    totalPriceCalculate();

    if(changedIndex == 10) {
        submit = true;
    }

    if(changedIndex === step) {
        next = true;
    }
    
});

function toggle() {

    $(".toggle-part").each(function() {

        if($(this).parent().attr("id") === options[step]) {
            $(this).show(500);
            $(this).prev().find("div").hide();

            $(this).prev().find("p.step-title.py-4").removeClass("py-4").addClass("py-8").removeClass("text-lg").addClass("text-2xl");

        } else {
            $(this).hide(1000);
            $(this).prev().find("div").show();

            $(this).prev().find("p.step-title.py-8").removeClass("py-8").addClass("py-4").removeClass("text-2xl").addClass("text-lg");

        }
    });

}

function totalPriceCalculate() {

    var total = 0;

    for(var i = 0 ; i < price.length ; i ++) {
        total += Number(price[i]);
    }
    for(var i = 0 ; i < dimension_price.length ; i ++) {
        total += Number(dimension_price[i]);
    }

    $("#price").html(total + "€");
    $("#price_finish").html(total + "€");
    $("#price_submit").val(total + "€");

}

$(".sel-item").click(function(event) {

    event.stopPropagation();

    $(this).parent().hide();
    $(this).parent().prev().find("svg.up-icon").hide();
    $(this).parent().prev().find("svg.down-icon").show();
    $(this).parent().prev().find("span").html($(this).html());

    var changedIndex;

    for(var i = 0 ; i < dimension_options.length ; i ++) {
        if($(this).parent().prev().find("span").attr("id") === dimension_options[i]) {
            changedIndex = i;
        }
    }

    var changedName = $(this).html();

    dimensions[changedIndex] = changedName;

    $("#" + dimension_options[changedIndex] + "_result_wrapper").show();
    $("#" + dimension_options[changedIndex] + "_result").html(changedName);
    $("#" + dimension_options[changedIndex] + "_result_finish").html(changedName);
    $("#" + dimension_options[changedIndex] + "_submit").val($(this).attr("id"));

    if(changedIndex === 0) {
        for(var i = 0 ; i < height_prices.length ; i ++) {
            if(height_prices[i][0] == changedName) {
                dimension_price[changedIndex] = height_prices[i][1];
            }
        }
    }
    if(changedIndex === 1) {
        for(var i = 0 ; i < width_prices.length ; i ++) {
            if(width_prices[i][0] == changedName) {
                dimension_price[changedIndex] = width_prices[i][1];
            }
        }
    }
    if(changedIndex === 2) {
        for(var i = 0 ; i < insulation_prices.length ; i ++) {
            if(insulation_prices[i][0] == changedName) {
                dimension_price[changedIndex] = insulation_prices[i][1];
            }
        }
    }

    totalPriceCalculate();

    if((dimensions[0] !== "" && dimensions[1] !== "") || dimensions[2] !== "") {
        next = true;
    }

});