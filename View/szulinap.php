<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="SzuliDoboz">
    <div class="SzuliCim">
        <p>
            Születésnapjaink
        </p>
    </div>

    <div class="SzulAlcim">
        <p>
            <em>
                Szerezzen felejthetetlen élményt gyermekének, ünnepelje nálunk születésnapját,
                hívja el a kicsi barátait is, játsszanak, ugráljanak , bolondozzanak, tomboljanak együtt!
            </em>
        </p>
    </div>

    <div class="SzuliLeiras">
        <div class="Cim">
            <p>
                A születésnapi buli részletei:
            </p>
        </div>

        <div class="SzuliUL">
            <div class="ElsoReszlet">
                <p>
                    Egyelőre hétköznap csak születésnap vagy rendezvény miatt vagyunk nyitva. Természetesen nyitottak vagyunk minden jó ötletre, 
                    megkeresésre, szakkörre. Keressenek nyugodtan az <a href="mailto:info@jatekbirodalom.hu">info@jatekbirodalom.hu</a> email címünkön, 
                    a <a href="tel:+36203410948">+36/20-341-0948</a> telefonszámon vagy a <a href="https://www.facebook.com/JatekbirodalomJatszohaz/?ref=pages_you_manage">facebook
                    oldalunkon</a>.
                    
                </p>
                <p>
                    <strong>
                        Belépés VÁLTÓCIPŐBEN vagy ZOKNIBAN lehetséges!
                    </strong>
                </p>
                <p>
                        Bármilyen ételt/ italt/tortát be lehet hozzánk hozni, otthon sütöttet is. Az ünnepi asztalterítőn, Tálaló tálon, késen, tortakivevőn kívűl <span style="text-decoration: underline;font-weight: bold;">a terítékről </span> (tányér, pohár, szalvéta, villa) <span style="text-decoration: underline;font-weight: bold;">a szülőnek kell gondoskodnia. </span>
                        <br><br>
                        12 éves kortól a gyermek, ha játszik a játszóházban található játékokkal ( léghoki/ csocsó kivételével) akkor gyermeknek számít. Ha nem játszik, akkor kísérőnek.
                </p>
            </div>
            
            <div class="MasodikReszlet">
                <div class="MasodikReszletCim">
                    <p>
                        Születésnapok ideje: 
                    </p>
                </div>
                <div class="MasodikReszletTartalom">
                    <div class="Idopontok">
                        <ul>
                            <li>
                                Hétköznap 15:30-18:30
                            </li>
                            <li>
                                Szombat/ vasárnap 9:30-12:00/12:30-15:00/15:30-18:00
                            </li>
                        </ul> 
                    </div>
                       
                    <p id="EgyedulalloBekezdes">
                        Kérem tekintsék meg a szabad helyeket <a href="http://www.jatekbirodalom.hu/View/nyitvatartas.php" target="_blank">itt</a> és vegyék fel velünk a kapcsolatot.
                    </p>
                    
                    <div class="MitTartalmaz">
                        <p>
                            Születésnapi csomagjaink:
                        </p>
                    </div>
                    <div class="SzulinapiCsomag">
                        <p>
                            Amennyiben az "A" csomagot választja kiegészítheti az azt nem tartalmazó tevékenységekkel a zárójelben látható összegért. 
                        </p>
                    </div>
                    <div class=TartalomReszletek>
                        <table>
                            <tr>
                               <td style="width:60%">
                                   <span style="font-weight: bold;">Születésnapi elemek</span>
                               </td>
                               <td style="width:20%">
                                   <span style="font-weight: bold;">"A" csomag</span>
                               </td>
                               <td style="width:20%">
                                   <span style="font-weight: bold;">"B" csomag</span>
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   A születésnapi terem feldíszítése (2.000 Ft)
                               </td>
                               <td>
                                   ✅
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   A születésnap idejére teljes zártkörűség (15.000 Ft)
                               </td>
                               <td>
                                   ✅
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   2,5 - 3 órán át a játszóházban található játékok ingyenes használata (10 gyermek / 35.000 Ft)
                               </td>
                               <td>
                                   ✅
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   10 kísérő (8.000 Ft)
                               </td>
                               <td>
                                   ✅
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   A léghoki használata végig a születésnap alatt (3.500 Ft / egész szülinap)
                               </td>
                               <td>
                                   ❌
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Gyermekfelügyelet (6.000 Ft / 2,5 - 3 óra)
                               </td>
                               <td>
                                   ❌
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   1 órás légvárhasználat (4.000 Ft) 
                               </td>
                               <td>
                                   ❌
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Lufihajtogatás (3.000 Ft /10db)
                               </td>
                               <td>
                                   ❌
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Animátorkodás, bulis játékok levezetése (6.000 Ft / 2,5 - 3 óra)
                               </td>
                               <td>
                                   ❌
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Egyéni fotófal használata (0 Ft)
                               </td>
                               <td>
                                   ✅
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   A születésnapon részt vevő összes gyermek mézeskalács ajándékot kap (3.000 Ft / 10 fő)
                               </td>
                               <td>
                                   ❌
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Takarítás (0 Ft) 
                               </td>
                               <td>
                                   ✅
                               </td>
                               <td>
                                   ✅
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Minden további gyermek vagy szülő (11. főtől) 2.000 Ft / fő
                               </td>
                               <td>
                                   ❌
                               </td>
                               <td>
                                   ❌
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Arcfestés (600 Ft / db)
                               </td>
                               <td>
                                   ❌
                               </td>
                               <td>
                                   ❌
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Csillámtetoválást (400 Ft / db)
                               </td>
                               <td>
                                   ❌
                               </td>
                               <td>
                                   ❌
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <span style="font-weight: bold;">Fizetendő</span>
                               </td>
                               <td>
                                   <span style="text-decoration: line-through;">60.000 Ft </span> helyett <span style="font-weight: bold;color: red;">28.000 Ft </span>
                               </td>
                               <td>
                                   <span style="text-decoration: line-through;">85.500 Ft </span>helyett <span style="font-weight: bold; color: red;">38.000 Ft </span>
                               </td>
                           </tr>
                       </table>    
                    </div>
                
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once('footer.php'); ?>
