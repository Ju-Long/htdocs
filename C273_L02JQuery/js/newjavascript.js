$(document).ready(function(){
    $(".back").css("textTransform", "uppercase");
    $("ul").addClass("top");
    $("ul li").css("display", "inline");
    $("#friends a [href*='.com']").css("font-color", "#0087cc");
    $("#friends a").addClass("nav");
    $("#social a:even").css("background-color", "lightblue");
    $("#social a:odd").css("background-color", "lightpink");
    $("p:last").css("font-size", "8")
})