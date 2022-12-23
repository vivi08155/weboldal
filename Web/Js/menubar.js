var HamburgerOpen = false;
$(document).ready( function() {
    $("#HAMBURGER").click(function () {
        if(HamburgerOpen) {
            $("#HAMBURGER").removeClass("active");
            $("#LINKSGROUP").css("left", "-100vw");
            $("#MOBILESUBLINKJATSZO").css("left", "-100vw");
            $("#MOBILESUBLINKLEGVAR").css("left", "-100vw");
            $("#MOBILESUBLINKTABOR").css("left", "-100vw");
            HamburgerOpen = false;
        } else {
            $("#HAMBURGER").addClass("active");
            $("#LINKSGROUP").css("left", "0");
            HamburgerOpen = true;
        }
    });

    $("#MOBILJATSZO").click(function () {
        $("#MOBILESUBLINKJATSZO").css("left", "0");
    });

    $("#JATSZOBACK").click(function () {
        $("#MOBILESUBLINKJATSZO").css("left", "-100vw");
    });

    $("#MOBILLEGVAR").click(function () {
        $("#MOBILESUBLINKLEGVAR").css("left", "0");
    });

    $("#lEGVARBACK").click(function () {
        $("#MOBILESUBLINKLEGVAR").css("left", "-100vw");
    });

    $("#MOBILTABOR").click(function () {
        $("#MOBILESUBLINKTABOR").css("left", "0");
    });

    $("#TABORBACK").click(function () {
        $("#MOBILESUBLINKTABOR").css("left", "-100vw");
    });
})