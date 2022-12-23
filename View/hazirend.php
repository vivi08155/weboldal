<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="HazirendDoboz">
    <div class="HazirendCim">
        <p>
            Házirend
        </p>
    </div>
    <div class="HazorendAlcim">
        <p>
            Tisztelt Szülők és Kísérők!
        </p>
    </div>
    <div class="HazirendLeiras">
        <ul>
            <li>
                A játszóház területére csak zokniban vagy puhatalpú tutyiban szabad belépni!
                Keménytalpú papucsban senkit sem engedünk be!
            </li>
            <li>
                Mindenki saját felelősségére használhatja a berendezéseket!
            </li>
            <li>
                A játszóházba természetesen a szülő is bejöhet a gyerekkel játszani (felnőtt kísérő 500 Ft / fő)
            </li>
            <li>
                Játszóházunkba tilos ételt behozni, ez alól egyedül a szülinapi rendezvényre érkező gyermekek élveznek kivételt,
                de ők is csak a kijelölt helyen fogyaszthatják el az általuk behozott ételeket-italokat.
            </li>
            <li>
                Az összes játék rendeltetésének megfelelően használandó,
                a nem rendeltetésszerű használat során keletkező károkért a kísérő vállal anyagi felelősséget!
            </li>
            <li>
                A játékokat szétszedni, rongálni szigorúan TILOS!
            </li>
            <li>
                A nem rendeltetésszerű használatból eredő balesetért és annak következményeiért a kísérő a felelős!
            </li>
            <li>
                Tilos a dohányzás!
            </li>
        </ul>
    </div>
</div>

<?php require_once('footer.php'); ?>