<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

    <div class="MinimegaBox">
        <div class="MinimegaCim">
            <p>
                <strong>Minimega</strong>
            </p>
        </div>

        <div class="MinimegaLeiras">
            <p class="MinimegaLeirasCim">
                Leírás:
            </p>
            <p>
                Többfunkciós ügyességi játék kicsiknek. A légvárban a gyerek kedvére ugrálhat, és a mászófalon keresztül érheti el a csúszdát. Mindenki kipróbálhatja ügyességét.
                <br><br>
                Születésnapokra, családi rendezvényekre bérelhető.
                <br>
                A mászófalon való felmászás nehézsége miatt <strong>5 éves kortól ajánljuk.</strong><br>
                Egy időben legfeljebb <strong>3-4-en</strong> tartózkodhatnak benne.
                <br>
            </p>
        </div>

        <div class="MinimegaAr">
            <div class="MinimegaArCim">
                <p>
                    Bérleti díj:
                </p>
            </div>

            <div class="MinimegaArAdatok">
                <p>
                    <strong>45.000 Ft / 8 óra </strong>(kezelő személyzettel) + 100 Ft/km szállítási díj
                    <br>
                    <strong>30.000 Ft / 4 óra </strong>(kezelő személyzettel) + 100 Ft/km szállítási díj
                    <br>
                </p>
                <p class="MinimegaArAdatokP">
                    Kedvezményesen!
                </p>
                <p>
                    Amennyiben a bérlő szállítja és üzemelteti, akkor a <strong>kedvezményes bérleti díj 1 napra 40.000Ft!</strong>
                    <br>
                    A helyszínre szállítás (akár személyautóval), felállítás, üzemeltetés a bérlő feladata, amelyet egy személy egyedül is könnyen elvégezhet.
                </p>
            </div>
        </div>

        <div class="MinimegaMeret">
            <div class="MinimegaMeretCim">
                <p>
                    Méretek:
                </p>
            </div>

            <div class="MinimegaMeretAdatok">
                <p>
                <ul>
                    <li>Hosszúsága: 4m</li>
                    <li>Szélessége: 2m</li>
                    <li>Magassága: 2,3m</li>
                    <li>Tömege: 28g</li>
                    <li>Teherbírása: 120kg</li>
                </ul>
                <br>
                </p>
            </div>
        </div>

        <div class="MinimegaGaleria">
            <div class="MinimegaGaleriaCim">
                <p>
                    Néhány kép lágvárunkról:
                </p>
            </div>

            <div class="MinimegaGaleriaKepek">
                <?php
                $jatszo_kepek = 10;

                for($i = 1; $i <= $jatszo_kepek; $i++) {
                    echo '<a href="../Web/Assets/minimega' . $i . '.jpg" data-lightbox="minimega"><img src="../Web/Assets/minimega' . $i . '.jpg"></a>';
                }
                ?>
            </div>
        </div>
    </div>

<?php require_once('footer.php'); ?>