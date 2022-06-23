<?php
$producten = array("Crossaint", "Baguette", "Brood");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3ee23cac4e.js" crossorigin="anonymous"></script>
    <title>Broodshop👍</title>
</head>
<body>
<section class="nav-container">
    <header>
        <ul class="nav_links2">
            <li><a href="index.php">Broodshop👍 </a></li>
            <li class="dropdown">
                <div class="dropbtn">Shop
                    <i class="fa fa-caret-down"></i>
                </div>
                <div class="dropdown-content">
                    <a href="crossaint.php"><?=$producten[0] ?></a>
                    <a href="baguette.php"><?=$producten[1] ?></a>
                    <a href="brood.php"><?=$producten[2] ?></a>
                </div>
            </li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <ul class="nav_links">
            <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
            <li><a href=""><i class="fa-solid fa-bookmark"></i></a></li>
            <li><a href=""><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </header>
</section>
</body>
</html>
