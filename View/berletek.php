<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="BerletekDoboz">
    <div class="BerletCim">
        <p>
            Bérleteink
        </p>
    </div>

    <div class="BerletLeiras">
        <p>
            Újra lehet kedvezményes bérleteket vásárolni, melyekkel akár 30%-ot is spórolhatnak.
            Érvényességi idejük fél év.
            Élvezze a kedvezményeket, váltson ön is bérletre!
        </p>
    </div>

    <div class="BerletekBemutatasa">
        <div class="BerletSor">
            <div class="Feloras">
                <div class="Leiras">
                    <p>
                        Félórás bérlet 10 alkalomra 15.000 Ft helyett csak 10.000 Ft
                    </p>
                </div>

                <div class="Kep">
                    <img src="../Web/Assets/berlet1.jpg" alt="Félórás bérlet képe">
                </div>
            </div>
        </div>

        <div class="BerletSor">
            <div class="Egyoras">
                <div class="Leiras">
                    <p>
                        Egyórás bérlet 10 alkalomra 20.000 Ft helyett csak 15.000 Ft
                    </p>
                </div>

                <div class="Kep">
                    <img src="../Web/Assets/berlet2.jpg" alt="Egyórás bérlet képe">
                </div>
            </div>
        </div>

        <div class="Megeros">
            <div class="ElsoMegeros">
                <p>
                    Miért éri meg?
                </p>
            </div>

            <div class="MasodikMegeros">
                <li>
                    Bérlettel jövő gyermekeknél nem számítjuk fel az óránkénti 500Ft-os
                    gyermekfelügyeleti díjat.
                </li>
                <li>
                    Több gyermek is használhatja egyszerre, nem névre szóló.
                </li>
                <li>
                    Vásárlástól számítva fél évig felhasználható.
                </li>
                <li>
                    Bérletenként az 1. felnőtt kísérő ingyen jöhet be játszóházunkba.
                </li>
                <li>
                    Minél hosszabb időtartamú bérletet vásárol, annál többet nyer rajta.
                </li>
                <li>
                    Ajándéknak is ideális.
                </li>
            </div>

        </div>

        <div class="Reszletek">
            <div class="ElsoMegeros">
                <p>
                    Fontos tudnivalók még:
                </p>

            </div>
            <div class="MasodikMegeros">
                <li>
                    Amennyiben egy bérlettel egyszerre több gyermek jön be,
                    1 kísérő belépődíját, azaz az 500 Ft-ot magunkra vállaljuk.
                </li>
                <li>
                    További kísérők esetén már nincs gyermek akit kísérjenek,
                    ezért nekik fejenként 500 Ft-ot kell kifizetniük.
                </li>
                <li>
                    Természetesen ha minden gyermeknek saját bérlete van,
                    annyi felnőtt kísérő jöhet be velük ingyen, ahány bérletet egyszerre
                    felhasználnak.
                </li>
                <li>
                    A kedvezmények nem összevonhatóak.
                </li>
                <li>
                    Ha valaki több ideig marad, mint amilyen bérletet vett,
                    azt az időt távozáskor az árjegyzékünk alapján ki kell fizetni.
                </li>
            </div>
        </div>
    </div>

    <div class="Utalvany">
        <div class="CimU">
            <p>
                Ajándék utalvány:
            </p>
        </div>
        <div class="KifejtosU">
            <ul>
                <li>
                    Lepje meg gyermekét, rokonát, barátját, ismerősét Ajándék utalvánnyal, amely beváltható a Játékbirodalom Játszóházában.
                </li>
                <li>
                    Születésnapra, névnapra, húsvétra, karácsonyra, a jó bizonyítványért, ballagásra, gyermeknapra kitűnő ajándék.
                </li>
                <li>
                    A következő utalványok közül lehet választani:
                    <ul class="BelsoUL">

                        <li>
                            30 perces játszóházi jegy
                        </li>
                        <li>
                            60 perces játszóházi jegy
                        </li>
                        <li>
                            Napijegy (megszakítás nélkül)
                        </li>
                        <li>
                            Félórás bérlet
                        </li>
                        <li>
                            Egyórás bérlet
                        </li>
                        <li>
                            Születésnapi buli
                        </li>
                    </ul>
                </li>
                <li>
                    Amennyiben speciális igény merül fel, megpróbáljuk azt is teljesíteni. Keressenek bizalommal.
                </li>
            </ul>

        </div>

    </div>

</div>

<?php require_once('footer.php'); ?>
