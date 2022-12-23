<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="BohocBox">
    <div class="BohocCim">
        <p>
            <strong>Bohóc</strong>
        </p>
    </div>

    <div class="BohocLeiras">
        <p class="BohocLeirasCim">
            Leírás:
        </p>
        <p>
            Ugráló és csúszda kicsiknek, kiesés elleni védelemmel.
            <br>
            Bölcsiseknek, kiscsoportos óvódásoknak (egyszerre <strong>max. 3 fő </strong>használhatja)
            <br><br>
            Születésnapokra, családi rendezvényekre bérelhető.
            <br>
            Felállítható a garázsban vagy akár a nappaliban is.
        </p>
    </div>

    <div class="BohocAr">
        <div class="BohocArCim">
            <p>
                Bérleti díj:
            </p>
        </div>

        <div class="BohocArAdatok">
            <p>
                <strong>25.000 Ft / 8 óra </strong>(kezelő személyzettel) + 100 Ft/km szállítási díj
                <br>
                <strong>20.000 Ft / 4 óra </strong>(kezelő személyzettel) + 100 Ft/km szállítási díj
                <br>
                Csak kezelőszemélyzettel együtt lehet ezt a légvárat kibérelni.
                <br>
            </p>
            <p class="BohocArAdatokP">
                Akció 3 az 1-ben!
            </p>
            <p>
                <strong>3 óra időtartamra </strong>a légvár, valamint az arcfestés, csillámtetoválás, lufihajtogatás közül
                2 tevékenység együtt csak <strong>25.000 Ft</strong> + 90 Ft/km szállítási díj (Siófok területén a szállítás ingyenes).
                Az ár 2 fő animátort és az anyagköltséget is tartalmazza.
                <br>
            </p>
        </div>
    </div>

    <div class="BohocMeret">
        <div class="BohocMeretCim">
            <p>
                Méretek:
            </p>
        </div>

        <div class="BohocMeretAdatok">
            <p>
                <ul>
                    <li>Hosszúsága: 3,65m</li>
                    <li>Szélessége: 2,45m</li>
                    <li>Magassága: 2,3m</li>
                    <li>Tömege: 26,6kg</li>
                    <li>Teherbírása: 117kg</li>
                </ul>
                <br>
            </p>
        </div>
    </div>

    <div class="BohocGaleria">
        <div class="BohocGaleriaCim">
            <p>
                Néhány kép lágvárunkról:
            </p>
        </div>

        <div class="BohocGaleriaKepek">
            <?php
            $jatszo_kepek = 5;
            
            for($i = 1; $i <= $jatszo_kepek; $i++) {
                echo '<a href="../Web/Assets/bohoc' . $i . '.jpg" data-lightbox="bohoc"><img src="../Web/Assets/bohoc' . $i . '.jpg"></a>';
            }
            ?>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
