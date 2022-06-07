<?php

function function1($img1, $stock, $prijs, $naam ) {
    echo "<div class='project-container'>
            <div class='project-item'><img src='$img1' alt=''></div>
        <div class='project-description'>
                <span>$naam</span>
                <span>$stock</span>
                <span>€".number_format($prijs, 2, ",", "")."</span>
            </div>
            <div class='project-button'>
                <a href=''>Voeg toe aan <i class='fa-solid fa-cart-shopping'></i></a>
            </div>
        </div>";
};

function function2($img1, $stock, $prijs, $naam, $prijs_korting ) {
    echo "<div class='project-container'>
            <div class='project-item'><img src='$img1' alt=''></div>
        <div class='project-description'>
                <span>$naam</span>
                <span>$stock</span>
                <span class='oude_prijs'>€".number_format($prijs, 2, ",", "")."</span>
                <span>€$prijs_korting</span>
            </div>
            <div class='project-button'>
                <a href=''>Voeg toe aan <i class='fa-solid fa-cart-shopping'></i></a>
            </div>
        </div>";
};

function function3 ($item_array, $array_count) {
    $counter = 0;
    while ($counter < $array_count) {
        if ($item_array[$counter][1] == 0) {
            $item_array[$counter][1] = "Uitverkocht";
        }elseif ($item_array[$counter][1] <= 15 ) {
            $item_array[$counter][1] = "Bijna uitverkocht";
        }else {
            $item_array[$counter][1] = "Op vooraad";
        }

        $counter++;
    };
    return $item_array;
}

function function4 ($product_array, $productnummer) {
    $prijs_korting_1 = $product_array[$productnummer][0] * 0.80;
    return number_format($prijs_korting_1, 2, ',','');
}