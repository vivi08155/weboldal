<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="VonatBox">
    <div class="VonatCim">
        <p>
            <strong>Vonat</strong>
        </p>
    </div>

    <div class="VonatLeiras">
        <p class="VonatLeirasCim">
            Leírás:
        </p>
        <p>
            Többfunkciós ügyességi játék kicsiknek. Alagúton át lehet a légvárba bejutni, ahol a gyerek kedvére ugrálhat, és a mászófalon keresztül érheti el a csúszdát. Mindenki kipróbálhatja ügyességét.
            <br><br>
            Születésnapokra, családi rendezvényekre bérelhető. <br>
            <strong>Maximum 8 éves korig (egyszerre 4-5 gyermek használhatja)</strong>
        </p>
    </div>

    <div class="VonatAr">
        <div class="VonatArCim">
            <p>
                Bérleti díj:
            </p>
        </div>

        <div class="VonatArAdatok">
            <p>
                <strong>45.000 Ft / 8 óra </strong>(kezelő személyzettel) + 100 Ft/km szállítási díj
                <br>
                <strong>30.000 Ft / 4 óra </strong>(kezelő személyzettel) + 100 Ft/km szállítási díj
                <br>
                Csak kezelőszemélyzettel együtt lehet ezt a légvárat kibérelni.
                <br>
            </p>
            <p class="VonatArAdatokP">
                Akció 3 az 1-ben!
            </p>
            <p>
                <strong>3 óra időtartamra</strong> a légvár, valamint az arcfestés, csillámtetoválás, lufihajtogatás közül
                2 tevékenység együtt csak <strong>35.000 Ft</strong> + 100 Ft/km szállítási díj (Siófok területén a szállítás ingyenes).
                Az ár 2 fő animátort és az anyagköltséget is tartalmazza.
                <br>
            </p>
        </div>
    </div>

    <div class="VonatMeret">
        <div class="VonatMeretCim">
            <p>
                Méretek:
            </p>
        </div>

        <div class="VonatMeretAdatok">
            <p>
            <ul>
                <li>Hosszúsága: 5,05m</li>
                <li>Szélessége: 2,5m</li>
                <li>Magassága: 2,4m</li>
                <li>Tömege: 28kg</li>
                <li>Teherbírása: 160kg</li>
            </ul>
            <br>
            </p>
        </div>
    </div>

    <div class="VonatGaleria">
        <div class="VonatGaleriaCim">
            <p>
                Néhány kép lágvárunkról:
            </p>
        </div>

        <div class="VonatGaleriaKepek">
            <?php
            $jatszo_kepek = 4;

            for($i = 1; $i <= $jatszo_kepek; $i++) {
                echo '<a href="../Web/Assets/vonat' . $i . '.jpg" data-lightbox="vonat"><img src="../Web/Assets/vonat' . $i . '.jpg"></a>';
            }
            ?>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>
