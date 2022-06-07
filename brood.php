<?php
require "header.php";
require "function.php";

$item_array = array(
    array(3.00, 15, "Brood"),
);

$array_teller = count($item_array);

$item_array = function3($item_array, $array_teller);

$prijs_korting_2 = function4($item_array, 0)

?>

<section>
    <div class="grid-project">
        <?php
        function1( "img/brood.jpg", $item_array[0][1], $item_array[0][0], $item_array[0][2]);
        ?>
    </div>
</section>