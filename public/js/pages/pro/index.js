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

    selected = ["", "" ,"" ,"", "", "", "", "", "", "", ""];
    price = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

    $(".height_price").each(function() {
        height_prices.push([$(this).attr("id"), $(this).html()]);
    });
    $(".width_price").each(function() {
        width_prices.push([$(this).attr("id"), $(this).html()]);
    });
    $(".insulation_price").each(function() {
        insulation_prices.push([$(this).attr("id"), $(this).html()]);
    });

    init();

    validateForm();

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

    $("#" + options[changedIndex] + "_result").html(changedName);
    $("#" + options[changedIndex] + "_submit").val($(this).attr("id"));
    $("#" + options[changedIndex] + "_submit_pay").val($(this).attr("id"));

    totalPriceCalculate();

});

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

}

function init() {

    for(var i = 0 ; i < options.length ; i ++) {

        if((i !== 6) && (i !== 7)) {

            var changedName = $("#" + options[i]).find("div.active").find("p").first().html();
            var changedPrice = $("#" + options[i]).find("div.active").find("p").last().html();
            var changedId = $("#" + options[i]).find("div.active").attr("id");

            selected[i] = changedName;
            price[i] = changedPrice;

            $("#" + options[i] + "_result").html(changedName);
            $("#" + options[i] + "_submit").val(changedId);
            $("#" + options[i] + "_submit_pay").val(changedId);

        }

    }

    for(var i = 0 ; i < dimension_options.length ; i ++) {

        var changedName = $("#" + dimension_options[i]).html();
        var changedId = $("#" + dimension_options[i] + "_default").html();

        dimensions[i] = changedName;
        
        $("#" + dimension_options[i] + "_result").html(changedName);
        $("#" + dimension_options[i] + "_submit").val(changedId);
        $("#" + dimension_options[i] + "_submit_pay").val(changedId.trim());

        if(i == 0) {
            for(var j = 0 ; j < height_prices.length ; j ++) {
                if(height_prices[j][0].trim() == changedName.trim()) {
                    dimension_price[0] = height_prices[j][1];
                }
            }
        }
        if(i == 1) {
            for(var j = 0 ; j < width_prices.length ; j ++) {
                if(width_prices[j][0].trim() == changedName.trim()) {
                    dimension_price[1] = width_prices[j][1];
                }
            }
        }
        if(i == 2) {
            for(var j = 0 ; j < insulation_prices.length ; j ++) {
                if(insulation_prices[j][0].trim() == changedName.trim()) {
                    dimension_price[2] = insulation_prices[j][1];
                }
            }
        }

    }

    totalPriceCalculate();

}

$("#new-project").keyup(function() {
    validateForm();
});

$("#new-project").change(function() {
    validateForm();
});

$("#new-project").focus(function() {

    $("#select-project").html("Sélectionner un projet");
    $("#select-project-submit").val("");
    selectProject = false;

    validateForm();
    
});

function validateForm() {

    var newProject = $("#new-project").val();

    var button = $("button.submit-button");
    
    if(selectProject || newProject.length != 0) {

        if(!button.hasClass("active")) {
            button.addClass("active");
            button.attr("type", "submit");
        }

    } else {

        if(button.hasClass("active")) {
            button.removeClass("active");
            button.attr("type", "button");
        }
    }
}

$(".project-item").click(function() {
    $(this).parent().hide();
    $(this).parent().prev().find("svg.up-icon").hide();
    $(this).parent().prev().find("svg.down-icon").show();
    $(this).parent().prev().find("span").html($(this).html());

    $("#select-project-submit").val($(this).attr("id"));

    $("#new-project").val("");

    selectProject = true;

    validateForm();
    
});

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
    $("#" + dimension_options[changedIndex] + "_submit_pay").val($(this).attr("id"));

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

});