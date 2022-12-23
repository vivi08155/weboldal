<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

    <div class="TuraBox">
        <div class="TuraCim">
            <p>
                Kirándulásra fel! Ismerd meg Magyarországot!
            </p>
        </div>
        <div class="TuraLeiras">
            <p>
                A természetjárás remek móka, ezernyi kincs vár Rád. Csatlakozz Te is idén induló kiránduló csoportunkhoz. Egész éven át, minden hónapban egyszer egy szombaton,
                közösen, napi 10 órában kirándulni megyünk. Vagy gyalogosan fedezünk fel egy tanösvényt vagy kerékpárral jutunk el egy kilátóhoz, netán vonatra, hajóra szállunk,
                hogy elérjük célunkat. Gyönyörű arborétumok, erdei ösvények, tavak, kilátók, nevezetességek várnak ránk. Igény esetén sátorban/ játszóházban is alszunk és
                táborokat szervezünk. A természetjáró szakkör havi díja 1.gyermek 7.000 Ft, 2. gyermek 6.500 Ft, 3. gyermek 6.000 Ft, mely tartalmazza a szakszerű túravezetést, a felügyeletet, a mindenkori utazás és belépti díjak
                költségeit is. A felügyeletet edző és testnevelést tanító pedagógus biztosítja.
                <br><br>
                Ezenkívül havonta 3 órán át, melynek értéke 6000Ft, ingyen játszhatsz a Játékbirodalom Partyházban. Ha már úgy érzed nagy vagy ehhez, bár játszani
                sosem késő, a 3 óra ingyenjegyet kistestvérednek is odaajándékozhatod. A felügyeleti díjat is tartalmazza az ajándék.
                <br><br>
                5 éves kortól 14 éves korig várjuk a jelentkezésedet: <a href="tel:+36203410948">+36/20-341-0948 </a>
                <br><br>
                Jelentkezz hamar, mert a csoport létszáma véges. Várjuk a Te
                ötletedet is, Te hová szeretnél eljutni?
                <br>
                Molnár Korinna pedagógus
            </p>
        </div>
        <div class="TuraKovetkezo">
            <p class="TuraKovetkezoCim">
                Következő túránk:
            </p>
            <p>
                Kedves Gyerekek, fantasztikus utazásra invitállak benneteket! 
                <br><br>
<strong>2022. december 04-én vasárnap Felcsútra utazunk, vár bennünket a Vál- völgyi Kisvasút.</strong>🚂🎪
<br><br>
Pompázó világítással feldíszített vonaton utazunk, ahol Manók osztogatnak csokikat, szaloncukrot, hajtogatnak lufit. 🍬🍫🎈
<br>
Az egy órás varázslatos kaland során leszállhatunk a Puskás Akadémiánál, be is mehetünk, körbenézhetünk.⚽️
<br>
Fűtött sátor áll a vasútállomáson, ahol egésznapos gyermekprogramok várnak ránk. 
<br><br>
Lesz ott: 
</p>
<ul> 
<li>arcfestés és hajfonás csillámokkal </li>
<li> találkozás a Mikulással a varázslatos kuckóban </li>
<li> kézműves foglalkozások a manókkal: adventi koszorú, karácsonyfadísz, ünnepi hűtőmágnes készítés </li>
<li> mesebeli fotósarok </li>
<li> retro mesevetítés </li>
<li> óriás mesefigurák </li>
<li> linzer készítés és mézeskalács díszítés ( meg lehet enni vagy el lehet vinni) </li>
<li> zenés gyermekműsorok: Kovácsovics Fruzsina, Alma együttes </li>

</ul>

<div class="TuraKepekUj">
                            <?php
                            $jatszo_kepek = 4;

                            for($i = 1; $i <= $jatszo_kepek; $i++) {
                                echo '<a href="../Web/Assets/ujkirandulas' . $i . '.jpeg" data-lightbox="ujkirandulas"><img src="../Web/Assets/ujkirandulas' . $i . '.jpeg"></a>';
                            }
                            ?>
                        </div>

<p>
<br>
Várom a lelkes kismanók jelentkezését. 🧑‍🎄💞😊 Mindenkit szeretettel várok. 💞😊🥰
<br>
Ne felejtsétek az ingyen órákat lejátszani a Partyházban....
<br>
Kalandra fel!
            </p>
        </div>
        <div class="TuraKorabbiak">
            <p>
                Néhány kép az eddigi kirándulás helyszínekről:
            </p>
            <div class="TuraBejegyzes" >
                    <div class="TuraBejegyzes-Cim" id="TuraCim1">
                        <p>1. Túra - 2020.09.20. Fonyód:</p>
                        <i class="fal fa-plus"></i>
                        <i class="fal fa-minus"></i>
                    </div>
                    <div class="TuraBejegyzes-Szoveg" id="TuraSzoveg1">

                        <div class="TuraKepek">
                            <?php
                            $jatszo_kepek = 2;

                            for($i = 1; $i <= $jatszo_kepek; $i++) {
                                echo '<a href="../Web/Assets/kirandulas1' . $i . '.jpg" data-lightbox="kirandulas1"><img src="../Web/Assets/kirandulas1' . $i . '.jpg"></a>';
                            }
                            ?>
                        </div>

                    </div>
            </div>


            <div class="TuraBejegyzes" >
                <div class="TuraBejegyzes-Cim" id="TuraCim2">
                    <p>2. Túra - 2020.10.10. Kis- Balaton , Kányavári - sziget:</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="TuraBejegyzes-Szoveg" id="TuraSzoveg2">


                    <div class="TuraKepek">
                        <?php
                        $jatszo_kepek = 2;

                        for($i = 1; $i <= $jatszo_kepek; $i++) {
                            echo '<a href="../Web/Assets/kirandulas2' . $i . '.jpg" data-lightbox="kirandulas2"><img src="../Web/Assets/kirandulas2' . $i . '.jpg"></a>';
                        }
                        ?>
                    </div>

                </div>
            </div>

            <div class="TuraBejegyzes" >
                <div class="TuraBejegyzes-Cim" id="TuraCim3">
                    <p>3. Túra - 2020.10.30. Kecskemét:</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="TuraBejegyzes-Szoveg" id="TuraSzoveg3">


                    <div class="TuraKepek">
                        <?php
                        $jatszo_kepek = 2;

                        for($i = 1; $i <= $jatszo_kepek; $i++) {
                            echo '<a href="../Web/Assets/kirandulas3' . $i . '.jpg" data-lightbox="kirandulas3"><img src="../Web/Assets/kirandulas3' . $i . '.jpg"></a>';
                        }
                        ?>
                    </div>

                </div>
            </div>

            <div class="TuraBejegyzes" >
                <div class="TuraBejegyzes-Cim" id="TuraCim4">
                    <p>4. Túra - 2020.11.9. Töreki:</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="TuraBejegyzes-Szoveg" id="TuraSzoveg4">


                    <div class="TuraKepek">
                        <?php
                        $jatszo_kepek = 2;

                        for($i = 1; $i <= $jatszo_kepek; $i++) {
                            echo '<a href="../Web/Assets/kirandulas4' . $i . '.jpg" data-lightbox="kirandulas4"><img src="../Web/Assets/kirandulas4' . $i . '.jpg"></a>';
                        }
                        ?>
                    </div>

                </div>
            </div>

            <div class="TuraBejegyzes" >
                <div class="TuraBejegyzes-Cim" id="TuraCim5">
                    <p>5. Túra - 2020.12.29. Ságvár:</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="TuraBejegyzes-Szoveg" id="TuraSzoveg5">


                    <div class="TuraKepek">
                        <?php
                        $jatszo_kepek = 2;

                        for($i = 1; $i <= $jatszo_kepek; $i++) {
                            echo '<a href="../Web/Assets/kirandulas5' . $i . '.jpg" data-lightbox="kirandulas5"><img src="../Web/Assets/kirandulas5' . $i . '.jpg"></a>';
                        }
                        ?>
                    </div>

                </div>
            </div>

            <div class="TuraBejegyzes" >
                <div class="TuraBejegyzes-Cim" id="TuraCim6">
                    <p>6. Túra - 2020.01.07. Eplény:</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="TuraBejegyzes-Szoveg" id="TuraSzoveg6">


                    <div class="TuraKepek">
                        <?php
                        $jatszo_kepek = 2;

                        for($i = 1; $i <= $jatszo_kepek; $i++) {
                            echo '<a href="../Web/Assets/kirandulas6' . $i . '.jpg" data-lightbox="kirandulas6"><img src="../Web/Assets/kirandulas6' . $i . '.jpg"></a>';
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php require_once('footer.php'); ?>