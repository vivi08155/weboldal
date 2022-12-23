<?php
session_start();
$configparams = require_once('../.Config/configparams.php');
require_once($configparams["MENUBAR"]);?>

<div class="Title">
    <p>Friss Hírek</p>
</div>


<div class="HomeContent">


    <!--image slider start-->
    <div class="slider">
      <div class="slides">
       <!--radio buttons start-->
         <input type="radio" name="radio-btn" id="radio1">
         <input type="radio" name="radio-btn" id="radio2">
         <input type="radio" name="radio-btn" id="radio3">
       <!--radio buttons end-->
    
       <!--slide images start-->
       <div class="slide first">
         <img src="../Web/Assets/swiper1.png" alt="">
       </div>
       <div class="slide">
          <img src="../Web/Assets/swiper2.png" alt="">
       </div>
       <div class="slide">
          <img src="../Web/Assets/swiper3.png" alt="">
       </div>

      <!--slide images end-->
    
     </div>
    
     <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
      </div>
     <!--manual navigation end-->
    </div> 
    <!--image slider end-->

<br><br>

    <div class="HomeColumns">
        <div class="LeftColumn">
              
              
              
            <div class="Bejegyzes" >
                <div class="Bejegyzes-Cim" id="HirCim1">
                    <p>Téli napközi</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="Bejegyzes-Szoveg" id="HirSzoveg1">
                    <p>
                        Kedves Szülők, kedves Gyerekek! 
                        <br><br>
                        Több, mint NAPKÖZI! Ez már KALANDTÁBOR! Hosszú a téli szünet? Tartalmas programokat adna gyermekének? Jó helyen szeretné tudni őt? Ha csak egy IGEN-nel felel, már a Játékbirodalom Partyház téli táborában van gyermeke helye...🙃
                        <br><br>
                            Kirándulás, fürdés, társasjáték parti, kézműveskedés, légvár, arcfestés, lufi, fejlesztő foglalkozások, sok-sok nevetés, játék...☺
                            <br><br>
                            Érd.: <a href="tel:+36203410948">+36/20-341-0948</a>
                            <br>
                            Időpont: 2023.01.02 - 2023.01.06. 8:00 - 16:30 
                            <br>
                            Heti ár: 35.000Ft, napi: 8.000Ft
                            <br>
                            A tábor egész napos étkezést, programok kavalkádját biztosítja.
                            <br>
                            <a href="tel:+36203410948">Jelentkezz most!</a>
                            <br><br>
                            A táboron kívül játszóházunk ELŐZETES TELEFONÁLÁS ESETÉN a következő napokon tart nyitva: dec. 22.23.27.28.29.30.
                            <br><br>
                            <img src="../Web/Assets/teli_tabor.png">
                            <br><br>
                    </p>
                </div>
            </div>
              
              
              
              
              
               <div class="Bejegyzes" >
                <div class="Bejegyzes-Cim" id="HirCim6">
                    <p>Karácsonyi mézes készülődés</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="Bejegyzes-Szoveg" id="HirSzoveg6"> 
                    <p>
                        Kedves Szülők, kedves Gyerekek! 

                        <br><br>
                        <img src="../Web/Assets/karacsony_mezes.png">
                        
                        <br><br>
                    </p>
                </div>
            </div>
              
              
              
              
              
              
              
            <!--  <div class="Bejegyzes" >-->
            <!--    <div class="Bejegyzes-Cim" id="HirCim5">-->
            <!--        <p>Programjaink gyerekeknek a Partyházunkban</p>-->
            <!--        <i class="fal fa-plus"></i>-->
            <!--        <i class="fal fa-minus"></i>-->
            <!--    </div>-->
            <!--    <div class="Bejegyzes-Szoveg" id="HirSzoveg5">-->
            <!--        <p>-->
            <!--            Kedves Szülők, kedves Gyerekek! -->

            <!--            <br><br>-->
                        
            <!--            <br><br>-->
            <!--        </p>-->
            <!--    </div>-->
            <!--</div>-->
            
            
             
             
             
             
            <!-- <div class="Bejegyzes" >-->
            <!--    <div class="Bejegyzes-Cim" id="HirCim4">-->
            <!--        <p>Mézeskalács díszítő foglalkozás </p>-->
            <!--        <i class="fal fa-plus"></i>-->
            <!--        <i class="fal fa-minus"></i>-->
            <!--    </div>-->
            <!--    <div class="Bejegyzes-Szoveg" id="HirSzoveg4">-->
            <!--        <p>-->
            <!--            Kedves Szülők, kedves Gyerekek! -->

            <!--            <br><br>-->
                       
            <!--        </p>-->
            <!--    </div>-->
            <!--</div>-->
            
             
             
             
             <div class="Bejegyzes" >
                <div class="Bejegyzes-Cim" id="HirCim2">
                    <p>Októberben 29-én újranyitunk</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="Bejegyzes-Szoveg" id="HirSzoveg2">
                    <p>
                        Kedves Szülők, kedves Gyerekek! 

                        <br><br>
                        Örömmel jelentjük be, hogy 2022. 10. 29-én Játékbirodalom Partyházunk megnyitja kapuit. Aznap meglepetés légvár is lesz.🍀🌹🍸
                        <br> <br>
Mielőtt elindulnak hozzánk, kérjük Önöket, hogy az aktuális nyitvatartásunkat lessék meg a weboldalunkon ( nyitvatartás, naptár címszó alatt). 
<br> 
Lila🟣 színnel jelöltük azt az idő intervallumot, amikor bárki bejöhet hozzánk játszani ( TISZTA váltócipőben vagy zokniban),nem szükséges bejelentkezni.🙂
<br>
 Kék🔵 színnel jelöltük a zártkörű születésnapokat.🎂
 <br>
  Piros🔴 színnel azokat a napokat jelöltük, amikor zárva tartunk. 
  <br> 
  3 hónap van fent egyszerre. Érdemes indulás előtt felnézni rá, mert foglalások függvényében ez bármikor változhat. 
 
<br>

<br>

Party/ játszóházunkban kb. 25 gyermek fér el kényelmesen, tehát véges a létszámunk. Aki előre bejelentkezik, előnyt élvez. 
Ezt megtehetik az <a href="mailto:info@jatekbirodalom.hu">info@jatekbirodalom.hu</a> email címünkön, 
            a <a href="tel:+36203410948">+36/20-341-0948</a> telefonszámon vagy a <a href="https://www.facebook.com/JatekbirodalomJatszohaz/?ref=pages_you_manage">facebook oldalunkon</a>. 👻
            Mindenkit szeretettel várunk. 
Siófok, Kálmán Imre sétány 11. 
Erika és Korinna🍀🍀🍀❤️❤️❤️
                        
                        <br><br>
                    </p>
                </div>
            </div>
            
            
            




            <div class="Bejegyzes" >
                <div class="Bejegyzes-Cim" id="HirCim3">
                    <p>Eladó a játszóházi ketrec és az összes játék</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="Bejegyzes-Szoveg" id="HirSzoveg3">
                    <p>
                        Kedves Siófokiak!
                        <br><br>
                        Ha valaki kedvet érez JÁTSZÓHÁZ üzemeltetéséhez, szívesen segítek neki, hogyan lehetne megmenteni ezt a lakosság által kedvelt szórakozási lehetőséget. 
                        A játszóházi ketrecünket költözés miatt teljesen széjjel kellett szednünk és helyhiány miatt eladóvá vált. Minden cső pontosan meg van jelölve, 
                        3D-s tervrajzot készítettünk róla, ezzel a felépítése megfelelő szakember segítségével könnyűvé válik. Szétszedhető, máshol újjáépíthető, a csövek 
                        tetszőlegesen alakíthatóak. Eladási ára 4 millió Ft + Áfa. 
                        (Újonnan megvásárolva egy ilyen méretű ketrec 10-12 millió forint + Áfa ilyen minőségben)
                        <br>
                        Új arculatunk kialakítása miatt régi játékaink is kedvezményes áron eladóvá váltak. Kérem tekintsék meg kínálatunkat <a href="http://www.jatekbirodalom.hu/View/teremberles.php" target="_blank">itt</a>. 
                        <br>
                        Kérem keressenek fel, ha valakit ez érdekel.
                        <br><br>
                        Molnár Korinna
                        <br>
                        <a href="tel:+36203410948">+36 / 20-341-0948</a>

                    </p>
                </div>
            </div>

        </div>

    </div>
</div>



<?php require_once($configparams["FOOTER"]);?>
