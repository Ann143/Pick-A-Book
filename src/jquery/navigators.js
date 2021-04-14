$(document).ready(function(){
    $(".slide-show-btn").mouseover(function () { 
        console.log("true")
        $(this).children().css("backgroundColor","transparent");
    });
    $(".slide-show-btn").mouseout(function () { 
        console.log("true")
        $(this).children().css("backgroundColor","rgb(20, 20, 20)");;
    });
});