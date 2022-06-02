<?php
function function1($img1, $stock, $prijs, $naam ) {
    echo "<div class='project-container'>
            <div class='project-item'><img src='$img1' alt=''></div>
        <div class='project-description'>
                <span>$naam</span>
                <span>$stock</span>
                <span>".number_format($prijs, 2, ",", "")."</span>
            </div>
            <div class='project-button'>
                <a href=''>Add to cart</a>
            </div>
        </div>";
};


function function2 ($item_array) {
    $counter = 0;
    while ($counter < 6) {
        if ($item_array[$counter][1] == 0) {
            $item_array[$counter][1] = "Out of stock";
        }elseif ($item_array[$counter][1] <= 15 ) {
            $item_array[$counter][1] = "Low Stock";
        }else {
            $item_array[$counter][1] = "In stock";
        }

        $counter++;
    };
    return $item_array;
}

function function3 () {

    $new_price = $new_discount[$product_number][0] - (30 / 100 * $new_discount[$product_number][1]);
    return number_format($new_price, 2, ',','');
}

?>
