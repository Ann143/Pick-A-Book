$(document).ready(function () {
    $(".slide-show-btn").mouseover(function () {
        $(this).children().css("backgroundColor", "transparent");
    });
    $(".slide-show-btn").mouseout(function () {
        $(this).children().css("backgroundColor", "rgb(30, 30, 30)");;
    });

    var togglespan = false;

    $(".side-nav-btn").click(function () {
        $(".side-nav").each(function () {
            if (togglespan == false){
                $(".slide-show-btn #toggle-span").removeClass("hide-display").addClass("d-flex");
                $(".side-nav").removeClass("expand-side-nav").addClass("unexpand-side-nav");
                $("#main").addClass("compress-main");
                togglespan = true;
            }else{
                $(".slide-show-btn #toggle-span").removeClass("d-flex").addClass("hide-display");
                $(".side-nav").addClass("expand-side-nav").removeClass("expand-side-nav");
                $("#main").removeClass("compress-main");
                togglespan = false;
            }
        });
    });

    $(".my-account").click(function(){
        $(".drop-nav-profile").toggle();
    });
});