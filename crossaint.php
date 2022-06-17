<?php
require "header.php";
require "function.php";
require "dbconnection.class.php";

$dbconnect = new dbconnection();

$sql = "SELECT * FROM producten WHERE `Catogorie` = 'Crossaint' ";
$query = $dbconnect -> prepare($sql);
$query -> execute() ;
$item_array = $query -> fetchAll(PDO::FETCH_NUM);

$array_teller = count($item_array);

$item_array = function3($item_array, $array_teller);

$prijs_korting_2 = function4($item_array, 0)

?>

<section>
    <div class="grid-project">
        <?php
        function1( "img/Crossaint.jpg", $item_array[0][4], $item_array[0][3], $item_array[0][2]);

        function1( "img/Crossaint2.jpg", $item_array[1][4], $item_array[1][3], $item_array[1][2]);

        function1( "img/kaas_crossaint.jpg", $item_array[2][4], $item_array[2][3], $item_array[2][2]);

        function1( "img/hamkaas_crossaint.jpg", $item_array[3][4], $item_array[3][3], $item_array[3][2]);

        function1( "img/jam_crossaint.jpg", $item_array[4][4], $item_array[4][3], $item_array[4][2]);

        function2("img/worstenbroodje_crossaint.png",  $item_array[5][4], $item_array[5][3], $item_array[5][2], $prijs_korting_2);
        ?>
    </div>
</section>
