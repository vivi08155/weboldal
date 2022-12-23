<?php
session_start();
$configparams = require_once('../.Config/configparams.php');

require_once('menubar.php');?>
<div class="Galeria">
    <div class="GaleriaCim">
        <p>
            Játszóházunkról képek:
            <!-- A fotók feltöltés alatt vannak! -->
        </p>
    </div>
    
    <div class="GaleriaKepek">
        <?php
        $jatszo_kepek = 15;

        for($i = 1; $i <= $jatszo_kepek; $i++) {
            echo '<a href="../Web/Assets/jatszo' . $i . '.jpeg" data-lightbox="jatszo"><img src="../Web/Assets/jatszo' . $i . '.jpeg" width="350px"></a>';
        }
        ?>
    </div>
</div>


<?php require_once('footer.php'); ?>