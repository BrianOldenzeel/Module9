<?php
require "header.php";
require "function.php";
require  "dbconnection.class.php";


$dbconnect = new dbconnection();

$sql = "SELECT * FROM producten WHERE `Catogorie` = 'Baguette' ";
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
        function2( "img/baguette.jpg", $item_array[0][4], $item_array[0][3], $item_array[0][2], $prijs_korting_2);
        ?>
    </div>
</section>
