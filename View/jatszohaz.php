<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="JatszoDoboz">
    <div class="JatszoCim">
        <p>
            Játszóház
        </p>
    </div>

    <div class="JatszoLeiras">
        <p>
            Egyelőre hétköznap csak születésnap vagy rendezvény miatt vagyunk nyitva. Természetesen nyitottak vagyunk minden jó ötletre, 
            megkeresésre, szakkörre. Keressenek nyugodtan az <a href="mailto:info@jatekbirodalom.hu">info@jatekbirodalom.hu</a> email címünkön, 
            a <a href="tel:+36203410948">+36/20-341-0948</a> telefonszámon vagy a <a href="https://www.facebook.com/JatekbirodalomJatszohaz/?ref=pages_you_manage">facebook oldalunkon</a>.
        </p>
        <p>
           <strong>
               Belépés VÁLTÓCIPŐBEN vagy ZOKNIBAN lehetséges!
           </strong> 
        </p>
        <div class="JatszoArak">
            <p>
                Árainkat úgy állítottuk össze, hogy a több gyermekkel érkezők több kedvezményt kapjanak. Ehhez nem feltétlen kell több gyermekesnek lenni, 
                barátnők is összebeszélhetnek. Ha <strong>EGYÜTT</strong> jönnek el hozzánk játszani, a kedvezmény akkor is jár!
            </p>
            <div class="ReszletesArak">
               <table>
                    <tr>
                        <th colspan="2">Áraink</th>
                    </tr>
                    <tr>
                       <td rowspan="4" style="width:35%; ">
                           1. óra:
                       </td>
                       <td style="width:65%">
                           1 gyermek esetén 2.000 Ft/fő
                       </td>
                   </tr>
                   <tr>
                       <td>
                           2 gyermek esetén 1.800 Ft/fő
                       </td>
                   </tr>
                   <tr>
                       <td>
                           3 gyermek esetén 1.600 Ft/fő
                       </td>
                   </tr>
                   <tr>
                       <td>
                           4 gyermektől 1500 Ft/ fő
                       </td>
                   </tr>
                   <tr style="height:100px">
                       <td>
                           Hétvégén 2 és fél óra/ hétköznap 3 óra:
                       </td>
                       <td>
                           3.500 Ft/fő
                       </td>
                   </tr>
                   <tr style="height:100px">
                       <td>
                          Felnőtt jegy, mely 2,5-3 óra bent tartózkodásra jogosít.
                       </td>
                       <td>
                           800 Ft/fő
                       </td>
                   </tr>
                   <tr style="height:100px">
                       <td>
                          Gyermekmegőrzés, mely az 1-3 órás felügyeletet tartalmaz. (Természetesen a választott alapdíjon felül)
                       </td>
                       <td>
                           500 Ft/fő
                       </td>
                   </tr>
                   <tr style="height:100px">
                       <td>
                          Csoportos kedvezmény iskolaidőben
                       </td>
                       <td>
                           600 Ft/fő, 3 felnőtt ingyen jöhet be
                       </td>
                   </tr>
               </table>
 
            </div>
        </div>
        <p>
            Játszóházként akkor üzemelünk, ha <strong>NINCS</strong> zártkörű, előre lefoglalt születésnap, ezért kérem indulás előtt <strong>MINDIG</strong> nézzék meg a 
            szabad időpontokat <a href="http://www.jatekbirodalom.hu/View/nyitvatartas.php" target="_blank">itt</a>.
        </p>
        <p>
            Ha azt látják az aktuális naptárban, hogy <strong>JÁTSZÓHÁZ</strong>, akkor nyugodtan lehet jönni, szeretettel várunk minden kis és nagy lurkót. 
            <br>
            Amennyiben <strong>SZÜLINAP</strong> címszót látnak, egyértelműen zártkörű a rendezvény. (Természetesen szülinapok iránt érdeklődni, előleget kifizetni ekkor is 
            lehetséges, jöjjenek nyugodtan, csak a gyermekek játszani nem tudnak.)
        </p>
        
    </div>
</div>

<?php require_once('footer.php'); ?>