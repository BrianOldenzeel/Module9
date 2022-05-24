<?php
$name ="broodshop";
$slogan ="Brood (Thumbs up)";
$product1 ="normaalbrood";
$product2 ="crossaint";
$product3 ="bagguete";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3ee23cac4e.js" crossorigin="anonymous"></script>
    <title>Webshop</title>
</head>
<body>
<section class="nav-container">
        <header>
                <ul class="nav_links2">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
    <div class="dropbtn">Shop
      <i class="fa fa-caret-down"></i>
    </div>
    <div class="dropdown-content">
      <a href="baguette.php">Baguette</a>
      <a href="brood.php">Brood</a>
      <a href="crossaint.php">Crossaint</a>
    </div>
  </li>
                    <li><a href="index.php">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <ul class="nav_links">
                    <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-bookmark"></i></a></li>
                    <li><a href=""><i class="fa-solid fa-user"></i></a></li>
                </ul>               
        </header>
    </section>

    <section>
        <div class="banner">
            <img src="img/banner2.png">
        </div>
    </section>

    <section>
        <div class="grid-project">
            <div class="project-container">
                <div class="project-item"><img src="img/Crossaint.jpg" alt=""></div>
                <div class="project-description">
                    <span>Freshly baked Crossaint's with different varieties</span>
                </div>
                <div class="project-button">
                    <a href="crossaint.php">Browse</a>
                </div>
            </div>
            <div class="project-container">
                <div class="project-item"><img src="img/baguette.jpg" alt=""></div>
                <div class="project-description">
                    <span>Freshly baked Crossaint's with different varieties</span>
                </div>
                <div class="project-button">
                    <a href="baguette.php">Browse</a>
                </div>
            </div>
            <div class="project-container">
                <div class="project-item"><img src="img/brood.jpg" alt=""></div>
                <div class="project-description">
                    <span>Freshly baked Crossaint's with different varieties</span>
                </div>
                <div class="project-button">
                    <a href="brood.php">Browse</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
