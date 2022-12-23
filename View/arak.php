<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="Arlista">
    <p id="Elso">
        Állítsa össze az Önnek leginkább kedvező csomagot.
        <br>
        A csomag az Alapárból és a Kiegészítő elemekből áll.
    </p>
    <div class="Arlista-Cim">
        <p>
            Alap árak gyerekeknek/kísérőknek
        </p>
    </div>
    <div class="Arlista-Arak">
        <div class="Arsor">
            <p class="Bal">
                15 perc
            </p>
            <p class="Jobb">
                500 Ft/fő
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                Fél óra
            </p>
            <p class="Jobb">
                1.000 Ft/fő
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                1 óra
            </p>
            <p class="Jobb">
                2.000 Ft/fő
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                3 óra (megszakítás nélküli)*
            </p>
            <p class="Jobb">
                3.500 Ft/fő
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                Napijegy (névre szóló, megszakítható)
            </p>
            <p class="Jobb">
                5.000 Ft/fő
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                Felnőtt kísérők
            </p>
            <p class="Jobb">
                500 Ft/fő
            </p>
        </div>
        
        <div class="Arsor">
            <p class="Kulon">
                *a 2. óra már csak 1500 Ft
            </p> 
        </div>
        

    </div>

    <div class="Arlista-Cim">
        <p>
            Bérletek
        </p>
    </div>
    <div class="Arlista-Arak">
        <div class="Arsor">
            <p class="Bal">
                Félórás bérlet (10 alkalomra)
            </p>
            <p class="Jobb">
                10.000 Ft/fő
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                Egyórás bérlet (10 alkalomra)
            </p>
            <p class="Jobb">
                20.000 Ft/fő
            </p>
        </div>
    </div>

    <div class="Arlista-Cim">
        <p>
            Kedvezmények
        </p>
    </div>
    <div class="Arlista-Arak">
        <div class="Arsor">
            <p class="Bal">
                Iskolaidőben, hétköznap 10 fő felett (iskolák, óvodák részére, a gyermekekre a pedagógusoknak kell felügyelniük)
            </p>
            <p class="Jobb">
                400 Ft/fő/óra
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                10 fő felett csoportos kedvezmény
            </p>
            <p class="Jobb">
                -20%
            </p>
        </div>
    </div>

    <div class="Arlista-Cim">
        <p>
            Születésnap*
        </p>
    </div>
    <div class="Arlista-Arak">
        <div class="Arsor">
            <p class="Bal">
                10 főig 2 órára
            </p>
            <p class="Jobb">
                21.000 Ft
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                10 főig 3 órára
            </p>
            <p class="Jobb">
                25.000 Ft
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                11. főtől akár gyermek, akár szülő
            </p>
            <p class="Jobb">
                +1.000 Ft/fő
            </p>
        </div>
    </div>

    <div class="Arlista-Cim">
        <p>
            Kiegészítő elemek
        </p>
    </div>
    <div class="Arlista-Arak">
        <div class="Arsor">
            <p class="Bal">
                Üdítő
            </p>
            <p class="Jobb">
                250 Ft - 500 Ft
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                Édesség, tejszelet, ropi
            </p>
            <p class="Jobb">
                200 Ft
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                Zokni
            </p>
            <p class="Jobb">
                300 Ft - 400 Ft
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                Lufihajtogatás**
            </p>
            <p class="Jobb">
                300 Ft/db
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                Arcfestés**
            </p>
            <p class="Jobb">
                500 Ft/fő
            </p>
        </div>

        <div class="Arsor">
            <p class="Bal">
                Csillámtetoválás
            </p>
            <p class="Jobb">
                400 Ft/db
            </p>
        </div>
    </div>

    <div class="Kiegeszites">
        <div class="Elso">
            <p>
                Nyitvatartás előtt vagy után minden megkezdett óra 1.000 Ft/fő
            </p>
        </div>

        <div class="Masodik">
            <p>
                *Az alapár 10 gyermek és 10 felnőtt belépésére jogosít
                <br>
                **Lufihajtogatás: 300 Ft/db (csak születésnapon vagy rendezvényen kérhető)
                <br>
                **Arcfestés: 500 Ft/fő (csak születésnapon vagy rendezvényen kérhető)
            </p>
        </div>

        <div class="Harmadik">
            <p>
                Fontos:
            </p>

            <ul>
                <li>
                    Amennyiben kísérő nélkül van bent a gyermek, a gyermekfelügyeletért 500 Ft/fő díjat kérünk, melyet a játszóházi díjon felül kell kifizetni.
                </li>
                <li>
                    A 15 perces jegy ára tartalmazza a gyermekfelügyeletet is.
                </li>
                <li>
                    Bérlet vásárlása esetén gyermekfelügyeleti díjat nem számítunk fel és egy felnőtt kísérő ingyen jöhet be.
                </li>
                <li>
                    A kedvezmények nem összevonhatók!;
                </li>
                <li>
                    A játszóház elhagyása előtt, a játék végeztével kell fizetni a bent eltöltött idő (alapárak) és az igénybe vett kiegészítő elemek alapján.
                </li>
                <li>
                    Az alapidők (15 perc, 30 perc, 1 óra, 3 óra) túllépése esetén automatikusan a következő alapidőt kell fizetni.
                </li>
                <li>
                    Továbbra is várjuk iskolaidőben az óvodás és iskolás csoportokat 60 %-os kedvezménnyel, csupán 400Ft/fő (a gyermekekre a pedagógusoknak kell felügyelniük).
                </li>
                <li>
                    A szülők is szervezhetnek ilyen csoportot.
                </li>
                <li>
                    A csoportos kísérőknek (maximum három fő) a belépő ingyenes, kávéval, teával kedveskedünk nekik.
                </li>
            </ul>

        </div>

    </div>
</div>

<?php require_once('footer.php'); ?>
