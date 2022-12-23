<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>


    <link rel="stylesheet" type="text/css" href="swiper.css">


    <div class="container">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

<?php require_once('footer.php'); ?>


