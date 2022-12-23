var lenyiltTura1 = false;
var lenyiltTura2 = false;
var lenyiltTura3 = false;
var lenyiltTura4 = false;
var lenyiltTura5 = false;
var lenyiltTura6 = false;

$(document).ready(function () {
    $("#TuraCim1").click(function () {
        if(lenyiltTura1) {
            $("#TuraSzoveg1").removeClass("TuraAktiv");
            $("#TuraCim1 .fal.fa-minus").fadeOut();
            $("#TuraCim1 .fal.fa-plus").fadeIn();
            lenyiltTura1 = false;

        } else {
            $("#TuraSzoveg1").addClass("TuraAktiv");
            $("#TuraCim1 .fal.fa-minus").fadeIn();
            $("#TuraCim1 .fal.fa-plus").fadeOut();
            lenyiltTura1 = true;

        }
    });

    $("#TuraCim2").click(function () {
        if(lenyiltTura2) {
            $("#TuraSzoveg2").removeClass("TuraAktiv");
            $("#TuraCim2 .fal.fa-minus").fadeOut();
            $("#TuraCim2 .fal.fa-plus").fadeIn();
            lenyiltTura2 = false;

        } else {
            $("#TuraSzoveg2").addClass("TuraAktiv");
            $("#TuraCim2 .fal.fa-minus").fadeIn();
            $("#TuraCim2 .fal.fa-plus").fadeOut();
            lenyiltTura2 = true;

        }
    });

    $("#TuraCim3").click(function () {
        if(lenyiltTura3) {
            $("#TuraSzoveg3").removeClass("TuraAktiv");
            $("#TuraCim3 .fal.fa-minus").fadeOut();
            $("#TuraCim3 .fal.fa-plus").fadeIn();
            lenyiltTura3 = false;

        } else {
            $("#TuraSzoveg3").addClass("TuraAktiv");
            $("#TuraCim3 .fal.fa-minus").fadeIn();
            $("#TuraCim3 .fal.fa-plus").fadeOut();
            lenyiltTura3 = true;

        }
    });

    $("#TuraCim4").click(function () {
        if(lenyiltTura4) {
            $("#TuraSzoveg4").removeClass("TuraAktiv");
            $("#TuraCim4 .fal.fa-minus").fadeOut();
            $("#TuraCim4 .fal.fa-plus").fadeIn();
            lenyiltTura4 = false;

        } else {
            $("#TuraSzoveg4").addClass("TuraAktiv");
            $("#TuraCim4 .fal.fa-minus").fadeIn();
            $("#TuraCim4 .fal.fa-plus").fadeOut();
            lenyiltTura4 = true;

        }
    });

    $("#TuraCim5").click(function () {
        if(lenyiltTura5) {
            $("#TuraSzoveg5").removeClass("TuraAktiv");
            $("#TuraCim5 .fal.fa-minus").fadeOut();
            $("#TuraCim5 .fal.fa-plus").fadeIn();
            lenyiltTura5 = false;

        } else {
            $("#TuraSzoveg5").addClass("TuraAktiv");
            $("#TuraCim5 .fal.fa-minus").fadeIn();
            $("#TuraCim5 .fal.fa-plus").fadeOut();
            lenyiltTura5 = true;

        }
    });

    $("#TuraCim6").click(function () {
        if(lenyiltTura6) {
            $("#TuraSzoveg6").removeClass("TuraAktiv");
            $("#TuraCim6 .fal.fa-minus").fadeOut();
            $("#TuraCim6 .fal.fa-plus").fadeIn();
            lenyiltTura6 = false;

        } else {
            $("#TuraSzoveg6").addClass("TuraAktiv");
            $("#TuraCim6 .fal.fa-minus").fadeIn();
            $("#TuraCim6 .fal.fa-plus").fadeOut();
            lenyiltTura6 = true;

        }
    });
})