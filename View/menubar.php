<?php
function auto_version($file='') {
    if(!file_exists($file))
        return $file;

    $mtime = filemtime($file);
    return $file.'?'.$mtime;
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <link rel="icon" type="image/x-icon" href="<?= $configparams["ASSETS"];?>REM.ico">
    <title>Játékbirodalom Partyház</title>

    <!-- MENUBAR CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="<?= $configparams["CSS"];?>menubar.css">
    <link rel="stylesheet" type="text/css" href="<?= $configparams["CSS"];?>lightbox.css">

    <!-- BODY CSS -->

    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/arak.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/berletek.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/bohoc.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/galeria.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/jatszohaz.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/hazirend.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/home.css'); ?>">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/merlin.css'); ?>">-->
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/minimega.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/nyitvatartasok.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/rendezvenyek.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/swiper.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/szulinap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/nyaritabor.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/tura.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/teremberles.css'); ?>">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/torta.css'); ?>">-->
    <link rel="stylesheet" type="text/css" href="<?php echo auto_version('../Web/Css/vonat.css'); ?>">


    <!-- FOOTER CSS -->
    <link rel="stylesheet" type="text/css" href="<?= $configparams["CSS"];?>footer.css">
</head>
<body>

    <div class="MenubarContainer" id="MenubarContainer">
        <div class="Logo">
            <a href="<?= $configparams["DOMAIN"];?>"><img src="<?= $configparams["ASSETS"];?>REM.png"></a>
        </div>
        <div class="LinksGroup" id="LINKSGROUP">
            <a href="<?= $configparams["DOMAIN"];?>">Friss Hírek</a>

            <div class="DropdownLink" id="MOBILJATSZO">
                <p>Partyház <i class="fa fa-caret-down" aria-hidden="true"></i></p>
                <div class="SubLink">
                    <!--<a href="<?= $configparams["VIEW"] . "arak.php"; ?>">Árak</a>-->
                    <!--<a href="<?= $configparams["VIEW"] . "berletek.php"; ?>">Bérletek</a>-->
                    <a href="<?= $configparams["VIEW"] . "jatszohaz.php"; ?>">Játszóház</a>
                    <!--<a href="<?= $configparams["VIEW"] . "hazirend.php"; ?>">Házirend</a>-->
                    <a href="<?= $configparams["VIEW"] . "nyitvatartas.php"; ?>">Nyitvatartás / Naptár</a>
                    <!--<a href="<?= $configparams["VIEW"] . "rendezvenyek.php"; ?>">Rendezvények</a>-->
                    <a href="<?= $configparams["VIEW"] . "szulinap.php"; ?>">Születésnapok</a>
                    <a href="<?= $configparams["VIEW"] . "teremberles.php"; ?>">Eladó dolgok</a>

                </div>
            </div>

            <div class="DropdownLink" id="MOBILLEGVAR">
                <p>Légvárak <i class="fa fa-caret-down" aria-hidden="true"></i></p>
                <div class="SubLinkSecond">
                    <a href="<?= $configparams["VIEW"] . "bohoc.php"; ?>">Bohóc</a>
                    <a href="<?= $configparams["VIEW"] . "minimega.php"; ?>">Minimega</a>
                    <a href="<?= $configparams["VIEW"] . "vonat.php"; ?>">Vonat</a>
                    <!--<a href="<?= $configparams["VIEW"] . "merlin.php"; ?>">Merlin</a>-->
                    <!--<a href="<?= $configparams["VIEW"] . "torta.php"; ?>">Torta</a>-->
                </div>
            </div>

            <div class="DropdownLink" id="MOBILTABOR">
                <p>Kalandra fel! <i class="fa fa-caret-down" aria-hidden="true"></i></p>
                <div class="SubLinkThird">
                    <a href="<?= $configparams["VIEW"] . "nyaritabor.php"; ?>">Nyári tábor</a>
                    <a href="<?= $configparams["VIEW"] . "tura.php"; ?>">Túrák</a>
                </div>
            </div>

            <a href="<?= $configparams["VIEW"] . "galeria.php"; ?>">Galéria</a>
        </div>

        <div class="Hamburger" id="HAMBURGER">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="Facebook">
            <a href="https://www.facebook.com/JatekbirodalomJatszohaz/?ref=pages_you_manage"><i class="fab fa-facebook"></i></a>
        </div>
    </div>

    <div class="MobileSublinkJatszo" id="MOBILESUBLINKJATSZO">
        <p>Partyház</p>
        <i class="fas fa-arrow-circle-left" id="JATSZOBACK"></i>
        <!--<a href="<?= $configparams["VIEW"] . "arak.php"; ?>">Árak</a>-->
        <!--<a href="<?= $configparams["VIEW"] . "berletek.php"; ?>">Bérletek</a>-->
        <a href="<?= $configparams["VIEW"] . "jatszohaz.php"; ?>">Játszóház</a>
        <!--<a href="<?= $configparams["VIEW"] . "hazirend.php"; ?>">Házirend</a>-->
        <a href="<?= $configparams["VIEW"] . "nyitvatartas.php"; ?>">Nyitvatartás / Naptár</a>
        <!--<a href="<?= $configparams["VIEW"] . "rendezvenyek.php"; ?>">Rendezvények</a>-->
        <a href="<?= $configparams["VIEW"] . "szulinap.php"; ?>">Születésnapok</a>
        <a href="<?= $configparams["VIEW"] . "teremberles.php"; ?>">Eladó dolgok</a>
    </div>

    <div class="MobileSublinkLegvar" id="MOBILESUBLINKLEGVAR">
        <p>Légvár</p>
        <i class="fas fa-arrow-circle-left" id="lEGVARBACK"></i>
        <a href="<?= $configparams["VIEW"] . "bohoc.php"; ?>">Bohóc</a>
        <a href="<?= $configparams["VIEW"] . "minimega.php"; ?>">Minimega</a>
        <a href="<?= $configparams["VIEW"] . "vonat.php"; ?>">Vonat</a>
        <!--<a href="<?= $configparams["VIEW"] . "merlin.php"; ?>">Merlin</a>-->
        <!--<a href="<?= $configparams["VIEW"] . "torta.php"; ?>">Torta</a>-->
    </div>

    <div class="MobileSublinkTabor" id="MOBILESUBLINKTABOR">
        <p>Kalandra fel!</p>
        <i class="fas fa-arrow-circle-left" id="TABORBACK"></i>
        <a href="<?= $configparams["VIEW"] . "nyaritabor.php"; ?>">Nyári tábor</a>
        <a href="<?= $configparams["VIEW"] . "tura.php"; ?>">Túrák</a>
    </div>
