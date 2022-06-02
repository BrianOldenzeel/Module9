<?php
require "header.php";
require "function.php";

$item_array = array(
        array(1.00, 15, "Crossaint"),
        array(1.10, 30, "Chocolade Crossaint"),
        array(1.30, 30, "Kaas Crossaint"),
        array(1.50, 10, "Hamkaas Crossaint"),
        array(1.50, 0, "Jam Crossaint"),
        array(1.50, 10, "Worstenbroodje Crossaint")
);

$item_array = function2($item_array)



?>

<section>
    <div class="grid-project">
        <?php
        function1( "img/Crossaint.jpg", $item_array[0][1], $item_array[0][0], $item_array[0][2]);

        function1( "img/Crossaint2.jpg", $item_array[1][1], $item_array[1][0], $item_array[1][2]);

        function1( "img/kaas_crossaint.jpg", $item_array[2][1], $item_array[2][0], $item_array[2][2]);

        function1( "img/hamkaas_crossaint.jpg", $item_array[3][1], $item_array[3][0], $item_array[3][2]);

        function1( "img/jam_crossaint.jpg", $item_array[4][1], $item_array[4][0], $item_array[4][2]);

        function1( "img/worstenbroodje_crossaint.png", $item_array[5][1], $item_array[5][0], $item_array[5][2]);
        ?>
    </div>
</section>
