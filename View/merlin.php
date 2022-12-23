<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="MerlinBox">
    <div class="MerlinCim">
        <p>
            <strong>Merlin varázsló vára</strong>
        </p>
    </div>

    <div class="MerlinLeiras">
        <p class="MerlinLeirasCim">
            Leírás:
        </p>
        <p>
            Színes, vidám, biztonságos, stabil.
            Kisebb rendezvényre, születésnapokra, óvodáknak, családi rendezvényekre ajánlott.
        </p>
    </div>

    <div class="MerlinAr">
        <div class="MerlinArCim">
            <p>
                Bérleti díj:
            </p>
        </div>

        <div class="MerlinArAdatok">
            <p>
                <strong>45.000 Ft / 8 óra </strong>(kezelő személyzettel) + 100 Ft/km szállítási díj
                <br>
                <strong>35.000 Ft / 4 óra </strong>(kezelő személyzettel) + 100 Ft/km szállítási díj
                <br>
            </p>
            <p class="MerlinArAdatokP">
                Kedvezmény!
            </p>
            <p>
                Amennyiben a bérlő szállítja és üzemelteti, akkor a <strong>kedvezményes bérleti díj 1 napra 30.000Ft!</strong>
                <br>
            </p>
        </div>
    </div>

    <div class="MerlinMeret">
        <div class="MerlinMeretCim">
            <p>
                Méretek:
            </p>
        </div>

        <div class="MerlinMeretAdatok">
            <p>
            <ul>
                <li>Hosszúsága: 4m</li>
                <li>Szélessége: 3m</li>
                <li>Magassága: 3,5m</li>
            </ul>
            <br>
            </p>
        </div>
    </div>

    <div class="MerlinGaleria">
        <div class="MerlinGaleriaCim">
            <p>
                Néhány kép lágvárunkról:
            </p>
        </div>

        <div class="MerlinGaleriaKepek">
            <?php
            $jatszo_kepek = 2;

            for($i = 1; $i <= $jatszo_kepek; $i++) {
                echo '<a href="../Web/Assets/merlin' . $i . '.jpg" data-lightbox="merlin"><img src="../Web/Assets/merlin' . $i . '.jpg"></a>';
            }
            ?>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
