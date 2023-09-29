<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Dot Coffee </title>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <script src="./bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include('header.php')?>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./assets/sf7lY6.jpg" class="d-block" alt="...">

                </div>
                <div class="carousel-item">
                <img src="./assets/jk1QqU.jpg" class="d-block" alt="...">
                
                </div>
                <div class="carousel-item">
                <img src="./assets/thumb-1920-774741.jpg" class="d-block w-100" alt="imagem de uma maquina de café expresso e uma moedora de grãos elétrica">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </body>
</html>