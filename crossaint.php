<?php
require "header.php";
$prijs_crossaint = 1.00;
$prijs_crossaint_zonder_btw = $prijs_crossaint * 0.91;
$prijs_crossaint_korting = $prijs_crossaint * 0.75;
$crossaint_voorraad = 21;

$prijzen_crossaint = array(
        array(1.00, 20),
        array(1.10, 30)
);
$counter = 0;
while ($counter < 2) {
if ($prijzen_crossaint[$counter][1] == 0) {
    $prijzen_crossaint[$counter][1] = "Out of stock";
}elseif ($prijzen_crossaint[$counter][1] < 15 ) {
    $prijzen_crossaint[$counter][1] = "Low Stock";
}else {
    $prijzen_crossaint[$counter][1] = "In stock";
}


$counter++;
};

if($crossaint_voorraad > 20) {
    $korting = true;
}else {
    $korting = false;
}
?>


<section>
    <div class="grid-project">
        <div class="project-container">
            <div class="project-item"><img src="img/Crossaint.jpg" alt=""></div>
            <div class="project-description">
                <span><?=$prijs_crossaint_zonder_btw?> <?=$prijs_crossaint?></span>
                <span><?=$prijzen_crossaint[0][1]?></span>
            </div>
            <div class="project-button">
                <a href="baguette.php">Add to cart</a>
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
                <span><?=$prijs_crossaint_zonder_btw?> <?=$prijs_crossaint?></span>
                <?php
                if($korting == true) {
                    echo '<span>Big Sale</span>';
                }
                if($crossaint_voorraad < 10) {
                    echo '<span>Low Stock</span>';
                }else {
                    echo '<span>In Stock</span>';
                }
                ?>
            </div>
            <div class="project-button">
                <a href="baguette.php">Add to cart</a>
            </div>
        </div>

        <div class="project-container">
            <div class="project-item"><img src="img/Crossaint2.jpg" alt=""></div>
            <div class="project-description">
                <span><?=$prijs_crossaint_zonder_btw?> <?=$prijs_crossaint?></span>
                <span><?=$prijzen_crossaint[1][1]?></span>
            </div>
            <div class="project-button">
                <a href="baguette.php">Add to cart</a>
            </div>
        </div>
    </div>
</section>
