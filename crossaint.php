<?php
require "header.php";
$prijs_crossaint = 0.75;
$prijs_crossaint_zonder_btw = $prijs_crossaint * 0.91;
$prijs_crossaint_korting = $prijs_crossaint * 1.20;

$korting = true;
?>


<section>
    <div class="grid-project">
        <div class="project-container">
            <div class="project-item"><img src="img/Crossaint.jpg" alt=""></div>
            <div class="project-description">
                <span>Crossaint</span>
            </div>
            <div class="project-button">
                <a href="crossaint.php">Add to cart</a>
            </div>
        </div>

        <div class="project-container">
            <div class="project-item"><img src="img/Crossaint.jpg" alt=""></div>
            <div class="project-description">
                <span><?=$prijs_crossaint_zonder_btw?> <?=$prijs_crossaint?></span>
                <?php
                if($korting == true) {
                    echo '<span>Big Sale</span>';
                }
                    ?>
            </div>
            <div class="project-button">
                <a href="baguette.php">Add to cart</a>
            </div>
        </div>

        <div class="project-container">
            <div class="project-item"><img src="img/Crossaint.jpg" alt=""></div>
            <div class="project-description">
                <span>Crossaint</span>
            </div>
            <div class="project-button">
                <a href="brood.php">Add to cart</a>
            </div>
        </div>

        <div class="project-container">
            <div class="project-item"><img src="img/Crossaint.jpg" alt=""></div>
            <div class="project-description">
                <span>Crossaint</span>
            </div>
            <div class="project-button">
                <a href="brood.php">Add to cart</a>
            </div>
        </div>
    </div>
</section>
