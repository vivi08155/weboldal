<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="TeremBox">
    <div class="TeremCim">
        <p>
            Régi játszóházunk ketrece és ezek a játékok eladók
        </p>
    </div>
    
    <div class="TeremLeiras">
        <p>
           Amennyiben a játszóház vagy bármelyik játék érdekelné érdeklődjön az <a href="mailto:info@jatekbirodalom.hu">info@jatekbirodalom.hu</a> email címünkön, 
            a <a href="tel:+36203410948">+36/20-341-0948</a> telefonszámon vagy a <a href="https://www.facebook.com/JatekbirodalomJatszohaz/?ref=pages_you_manage">facebook oldalunkon</a>. 
        </p>
    </div>

    <!--1. sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc1.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim1">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg1">
                    <p>
                        Plüss póniló 15.000 Ft.
                    </p>
                </div>
            </div>
        </div>

        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc2.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim2">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg2">
                    <p>
                        Minőségi labdák többféle színben korlátozott mennyiségben 50 Ft / db.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--2.sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc4.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim3">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg3">
                    <p>
                        Jó állapotban lévő járássegító 3.000 Ft. Az ülése kivehető és pakolható.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc36.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim4">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg4">
                    <p>
                        A lovag fogas 500 Ft, a 3 kismalac mesefigura 400 Ft, kis hableány kulacs 500 Ft, vasalható gyöngyök formákkal 3.000 Ft, vadonat új IKEA-s ágyláb 1.000 Ft.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--3. sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc7.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim5">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg5">
                    <p>
                        Dvd lejátszó és felvevő, egy televízió együtt 16.000 Ft.
                        <br>
                        A dvd lejátszó LG márkájú, 29x43x6cm.
                        <br>
                        A tévé Funai márkájú, 48x41x50cm.
                        
                    </p>
                </div>
            </div>
        </div>

        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc8.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim6">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg6">
                    <p>
                        Motor Max 1/24-es méretű vadonatúj autógyűjtőknek eladó 21.000 Ft. 6 féle van.                    
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--4.sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc9.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim7">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg7">
                    <p>
                        Motor Max 1/24-es méretű vadonatúj autógyűjtőknek eladó 21.000 Ft. 6 féle van.                    

                    </p>
                </div>
            </div>
        </div>
        
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc29.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim8">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg8">
                    <p>
                        Kompresszor / légbefúvó légvárakhoz, vadonatúj, 500 wattos, 40.000 Ft.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!--6.sor-->
    <div class="CuccokKeret">
        
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc38.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim12">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg12">
                    <p>
                        Baba fejlesztő ház levehető, forgatható formákkal 1.500 Ft. Disney szivacslapok 2.000 Ft.
                    </p>
                </div>
            </div>
        </div>
        
        
        
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc39.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim16">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg16">
                    <p>
                        Baba fa asztal 500 Ft, szerszámos ládika 300 Ft, Frischer Price teknős 3.000 Ft.
                    </p>
                </div>
            </div>
        </div>
    </div>
    


    <!--7. sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc15.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim13">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg13">
                    <p>
                        Gurulós, jó állapotú, polcos szekrény 5.000 Ft.
                    </p>
                </div>
            </div>
        </div>

        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc16.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim14">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg14">
                    <p>
                        Alig használt, pillangó formájú, vonalvezető, kéz / láb koordináció fejlesztő játék / iskola előkészítő 12.000 Ft.
                    </p>
                </div>
            </div>
        </div>
    </div>


    
    
    <!--9. sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc19.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim17">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg17">
                    <p>
                        Vidám, gyermek mintájú, meleg kis szőnyeg 80x150cm 4.000 Ft.
                    </p>
                </div>
            </div>
        </div>

        
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc21.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim19">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg19">
                    <p>
                        Narancssárga virágos szőnyeg 66x190cm 2.000 Ft.
                    </p>
                </div>
            </div>
        </div>
        
        
    </div>


    <!--12. sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc26.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim26">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg26">
                    <p>
                        7 db műanyag kugli, 2 db műanyag labdával 1.500 Ft.
                    </p>
                </div>
            </div>
        </div>

        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc40.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim27">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg27">
                    <p>
                        Építős üveggolyó pálya 4.000 Ft, tigris első laptopom 4.000 Ft, Igaz vagy hamis csillag játék 5.000 Ft, műanyag építőelemek 1.000 Ft.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--13.sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc35.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim35">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg35">
                    <p>
                        Fa puzzle és állatos fa forma rakosgató, 1.000 Ft / db.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc28.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim28">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg28">
                    <p>
                        Peg Perego márkájú tricikli 8.000 Ft.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--15.sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc31.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim31">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg31">
                    <p>
                        Fésülködő asztal Dóra forgó székkel 2.000 Ft .                   

                    </p>
                </div>
            </div>
        </div>
        
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc32.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim32">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg32">
                    <p>
                        Vadonatúj Artengo asztalra szerelhető, mini pimpong asztal 14.000 Ft.
                    </p>
                </div>
            </div>
        </div>
    </div>

    
    <!--16. sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc33.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim33">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg33">
                    <p>
                        Polly(24 darabos) és Micimackó(2x20 darabos) nagy méretű puzzle 500 Ft / db.
                    </p>
                </div>
            </div>
        </div>

        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc34.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim34">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg34">
                    <p>
                        Járműves fa puzzle, családi fa forma rakosgató, fa öltöztetős baba 500 Ft / db.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!--17.sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc41.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim36">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg36">
                    <p>
                        Oroszlános csörgő kocsiban 3.000 Ft, labda játék 2.000 Ft, Little Tikes zenélő ABC autó 3.000 Ft, egymásba rakható formák 500 Ft.
                        
                    </p>
                </div>
            </div>
        </div>
        
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc12.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim10">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg10">
                    <p>
                        Gépi fonott, szegett, török szőnyeg, meleg és puha. Egy darab 200x290 cm, 18.000 Ft, és négy darab 60x150 cm 6.000 Ft / darab. 
                    </p>
                </div>
            </div>
        </div>
    </div>


    
    
    <!--20.sor-->
    <div class="CuccokKeret">
        <div class="CuccEgyed">
            <div class="CuccKep">
               <img src="../Web/Assets/cucc5.jpg"> 
            </div>
            <div class="CuccReszletek">
                <div class="CuccReszletekCim" id="CuccCim25">
                    <p>Részletekért kattintson</p>
                    <i class="fal fa-plus"></i>
                    <i class="fal fa-minus"></i>
                </div>
                <div class="CuccBejegyzes-Szoveg" id="CuccSzoveg25">
                    <p>
                        Lányos konyha, gombnyomásra zenél. 4.000 Ft.
                    </p>
                </div>
            </div>
        </div>
        
    
    </div>


</div>


<?php require_once('footer.php'); ?>
