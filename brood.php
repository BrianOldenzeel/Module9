<?php
require "header.php";
require "function.php";

$item_array = array(
    array(3.00, 50, "Wit Brood"),
    array(2.50, 15, "Tijgerbrood"),
    array(3.00, 0, "Volkoren brood"),
);
// array_teller telt de aantal arrays in de multidimensional array
$array_teller = count($item_array);

$item_array = function3($item_array, $array_teller);

$prijs_korting_2 = function4($item_array, 0)

?>

<section>
    <div class="grid-project">
        <?php
        function1( "img/wit_brood.jpg", $item_array[0][1], $item_array[0][0], $item_array[0][2]);

        function2( "img/tijgerbrood.jpg", $item_array[1][1], $item_array[1][0], $item_array[1][2], $prijs_korting_2);

        function1( "img/volkoren_brood.jpg", $item_array[2][1], $item_array[2][0], $item_array[2][2]);
        ?>
    </div>
</section>