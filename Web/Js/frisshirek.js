var lenyiltHir1 = false;
var lenyiltHir2 = false;
var lenyiltHir3 = false;
var lenyiltHir4 = false;
var lenyiltHir5 = false;
var lenyiltHir6 = false;



$(document).ready(function () {
    $("#HirCim1").click(function () {
        if(lenyiltHir1) {
            $("#HirSzoveg1").removeClass("Aktiv");
            $("#HirCim1 .fal.fa-minus").fadeOut();
            $("#HirCim1 .fal.fa-plus").fadeIn();
            lenyiltHir1 = false;

        } else {
            $("#HirSzoveg1").addClass("Aktiv");
            $("#HirCim1 .fal.fa-minus").fadeIn();
            $("#HirCim1 .fal.fa-plus").fadeOut();
            lenyiltHir1 = true;

        }
    });

    $("#HirCim2").click(function () {
        if(lenyiltHir2) {
            $("#HirSzoveg2").removeClass("Aktiv");
            $("#HirCim2 .fal.fa-minus").fadeOut();
            $("#HirCim2 .fal.fa-plus").fadeIn();
            lenyiltHir2 = false;

        } else {
            $("#HirSzoveg2").addClass("Aktiv");
            $("#HirCim2 .fal.fa-minus").fadeIn();
            $("#HirCim2 .fal.fa-plus").fadeOut();
            lenyiltHir2 = true;

        }
    });

    $("#HirCim3").click(function () {
        if(lenyiltHir3) {
            $("#HirSzoveg3").removeClass("Aktiv");
            $("#HirCim3 .fal.fa-minus").fadeOut();
            $("#HirCim3 .fal.fa-plus").fadeIn();
            lenyiltHir3 = false;

        } else {
            $("#HirSzoveg3").addClass("Aktiv");
            $("#HirCim3 .fal.fa-minus").fadeIn();
            $("#HirCim3 .fal.fa-plus").fadeOut();
            lenyiltHir3 = true;

        }
    });
    
    $("#HirCim4").click(function () {
        if(lenyiltHir4) {
            $("#HirSzoveg4").removeClass("Aktiv");
            $("#HirCim4 .fal.fa-minus").fadeOut();
            $("#HirCim4 .fal.fa-plus").fadeIn();
            lenyiltHir4 = false;

        } else {
            $("#HirSzoveg4").addClass("Aktiv");
            $("#HirCim4 .fal.fa-minus").fadeIn();
            $("#HirCim4 .fal.fa-plus").fadeOut();
            lenyiltHir4 = true;

        }
    });
    
    $("#HirCim5").click(function () {
        if(lenyiltHir5) {
            $("#HirSzoveg5").removeClass("Aktiv");
            $("#HirCim5 .fal.fa-minus").fadeOut();
            $("#HirCim5 .fal.fa-plus").fadeIn();
            lenyiltHir5 = false;

        } else {
            $("#HirSzoveg5").addClass("Aktiv");
            $("#HirCim5 .fal.fa-minus").fadeIn();
            $("#HirCim5 .fal.fa-plus").fadeOut();
            lenyiltHir5 = true;

        }
    });
    
    $("#HirCim6").click(function () {
        if(lenyiltHir6) {
            $("#HirSzoveg6").removeClass("Aktiv");
            $("#HirCim6 .fal.fa-minus").fadeOut();
            $("#HirCim6 .fal.fa-plus").fadeIn();
            lenyiltHir6 = false;

        } else {
            $("#HirSzoveg6").addClass("Aktiv");
            $("#HirCim6 .fal.fa-minus").fadeIn();
            $("#HirCim6 .fal.fa-plus").fadeOut();
            lenyiltHir6 = true;

        }
    });
})