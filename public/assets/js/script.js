$(document).ready(function () {
    if ($(document).scrollTop() > 100) { // check if user scrolled more than 50 from top of the browser window
        $(".navbar-brand").addClass("small-navbrand");
        $(".navbar").addClass("smaillNavBar");
        $(".navbar-bran-div").addClass("navbar-bran-div-scrolling");
        $(".navbar-brand-img").addClass("navbar-brand-img-scrolling");
        $(".navbar-bran-div").css("display", "none");
        // $(".btn-to-top").css("display", "block")
    } else {
        $(".navbar-brand").removeClass("small-navbrand");
        $(".navbar").removeClass("smaillNavBar");
        $(".navbar-bran-div").removeClass("navbar-bran-div-scrolling");
        $(".navbar-brand-img").removeClass("navbar-brand-img-scrolling");
        $(".navbar-bran-div").css("display", "inline-flex");
        // $(".btn-to-top").css("display", "none")
    }
    $(window).scroll(function () { // check if scroll event happened
        if ($(document).scrollTop() > 100) { // check if user scrolled more than 50 from top of the browser window
            $(".navbar-brand").addClass("small-navbrand");
            $(".navbar").addClass("smaillNavBar");
            $(".navbar-bran-div").css("display", "none");
            $(".navbar-brand-img").addClass("navbar-brand-img-scrolling");
            $(".btn-to-top").css("display", "block");
            $(".hidden-nav").css("display", "block");
        } else {
            $(".navbar-brand").removeClass("small-navbrand");
            $(".navbar").removeClass("smaillNavBar");
            $(".navbar-bran-div").css("display", "inline-flex");
            // $(".navbar-brand-img").removeClass("navbar-brand-img-scrolling");
            // $(".btn-to-top").css("display", "none");
            $(".hidden-nav").css("display", "none");

        }
    });
});