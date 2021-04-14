$(document).ready(function () {
    $(".slide-show-btn").mouseover(function () {
        $(this).children().css("backgroundColor", "transparent");
    });
    $(".slide-show-btn").mouseout(function () {
        $(this).children().css("backgroundColor", "rgb(30, 30, 30)");;
    });

    var togglespan = false;

    $(".side-nav-btn").click(function () {
        $(".slide-show-btn").each(function () {
            $("#toggle-span").toggle();
        });
    });

    // $(".side-nav-btn").click(function(){
    //     $(".slide-show-btn").each(function(){
    //         $(".btn-name").toggle();
    //     })
    // });
});