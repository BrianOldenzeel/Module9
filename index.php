<?php
$name ="broodshop";
$slogan ="Brood (Thumbs up)";
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
<?php
    require "header.php";
?>

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
