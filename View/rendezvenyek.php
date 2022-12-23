<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>

<div class="RendDoboz">
    <div class="RendCim">
        <p>
            Rendezvényekre
        </p>
    </div>
    <div class="RendLeiras">
        <div class="LeirasCim">
            <p>
                Rendezvényekre vállalunk:
            </p>
        </div>
        <div class="LeirasUL">
            <ul>
                <li>
                    Légvárak üzemeltetését
                </li>
                <li>
                    Arcfestést
                </li>
                <li>
                    Csillámtetoválást
                </li>
                <li>
                    Lufihajtogatást
                </li>
            </ul>
        </div>
    </div>
    <div class="RendUL">
        <ul>
            <li>
                A légvárak méretét/bérleti díját külön fülön találja.
            </li>
            <li>
                A kiegészítő tevékenységek ára: 6000Ft/óra/animátor.
            </li>
            <li>
                Az ár tartalmazza az anyagköltséget is.
            </li>
        </ul>
    </div>
</div>

<?php require_once('footer.php'); ?>
