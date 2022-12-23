<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="TortaBox">
    <div class="TortaCim">
        <p>
            <strong>Torta</strong>
        </p>
    </div>

    <div class="TortaLeiras">
        <p class="TortaLeirasCim">
            Leírás:
        </p>
        <p>
            Kis helyen elfér, akár egy nappaliban is (az 50cm magas gyertyák visszahajthatóak).
            Születésnapra, családi rendezvényekre, ünnepségekre vagy kiegészítő ugráló elemként kiválóan alkalmas.
        </p>
    </div>

    <div class="TortaAr">
        <div class="TortaArCim">
            <p>
                Bérleti díj:
            </p>
        </div>

        <div class="TortaArAdatok">
            <p>
                <strong>45.000 Ft / 8 óra </strong>(kezelő személyzettel) + 100 Ft/km szállítási díj
                <br>
                <strong>35.000 Ft / 4 óra </strong>(kezelő személyzettel) + 100 Ft/km szállítási díj
                <br>
            </p>
            <p class="TortaArAdatokP">
                Kedvezmény!
            </p>
            <p>
                Amennyiben a bérlő szállítja és üzemelteti, akkor a <strong>kedvezményes bérleti díj 1 napra 30.000Ft!</strong>
                <br>
                A helyszínre szállítás (akár személyautóval), felállítás, üzemeltetés a bérlő feladata, amelyet egy személy egyedül is könnyen elvégezhet
                <br>
            </p>
        </div>
    </div>

    <div class="TortaMeret">
        <div class="TortaMeretCim">
            <p>
                Méretek:
            </p>
        </div>

        <div class="TortaMeretAdatok">
            <p>
            <ul>
                <li>Átmérője: 4m</li>
                <li>Magassága: 2 + 0,5m (gyertyák)</li>
                <li>Teherbírása: 120kg</li>
            </ul>
            <br>
            </p>
        </div>
    </div>

    <div class="TortaGaleria">
        <div class="TortaGaleriaCim">
            <p>
                Néhány kép lágvárunkról:
            </p>
        </div>

        <div class="TortaGaleriaKepek">
            <?php
            $jatszo_kepek = 3;

            for($i = 1; $i <= $jatszo_kepek; $i++) {
                echo '<a href="../Web/Assets/torta' . $i . '.jpg" data-lightbox="torta"><img src="../Web/Assets/torta' . $i . '.jpg"></a>';
            }
            ?>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>
