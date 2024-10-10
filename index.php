<?php

require_once __DIR__ . '/classes/Products.php';
require_once __DIR__ . '/classes/Foods.php';
require_once __DIR__ . '/classes/PetBeds.php';
require_once __DIR__ . '/classes/AnimalToys.php';
require_once __DIR__ . '/classes/Categories.php';

//CATEGORIE
$dog = new Categories('Cane');
$cat = new Categories('Gatto');

// CIBO
$food1 = new Foods('https://m.media-amazon.com/images/I/41Y35B127wL._AC_UF894,1000_QL80_.jpg', 'Special Dog', 7.99, 'Cibo', $dog, 'Cani adulti');
$food2 = new Foods('https://fera24.it/images/thumbnails/960/1214/detailed/129/5900951299209F1.jpg', 'Whiskas', 5.99, 'Cibo', $cat, 'Gatti cuccioli');

$foods = [
    $food1,
    $food2
];

// CUCCE
$petBed1 = new PetBeds('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWWu3l-P-c_5OEEW6J-sxi3E3ZqTwrC4maPw&s', 'Satur', 25.99, 'Cuccia', $dog, 'Grigia', 'Estiva');
$petBed2 = new PetBeds('https://m.media-amazon.com/images/I/71cS+MII06L._AC_UF350,350_QL80_.jpg', 'Cpaps', 38.99, 'Cuccia', $cat, 'Nero', 'Invernale');

$petBeds = [
    $petBed1,
    $petBed2
];

// GIOCATTOLI
$toy1 = new AnimalToys('https://arcaplanet.vtexassets.com/arquivos/ids/283187/FP4.1.307-AP--1-.jpg?v=638158653329870000', 'Lovedi', 15.99, 'Giocattolo', $dog, 'Marrone', 0.300);
$toy2 = new AnimalToys('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfixc7loJc5-06DKyFRzKAmSBf8MJNd8QVEA&s', 'Zolux', 22.99, 'Giocattolo', $cat, 'Bianco e Nero', 0.150);

$toys = [
    $toy1,
    $toy2
]


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="fw-bold text-center">PHP OOP 2</h1>
            </div>
            <?php foreach ($foods as $singleFood) { ?>
            <div class="card col-6" style="width: 18rem;">
                <img src="<?= $singleFood->getImage() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?= $singleFood->getTitle(); ?> </h5>
                    <p class="card-text"> <?= $singleFood->getPrice(); ?> </p>
                    <p> <?= $singleFood->getTypeOf(); ?> </p>
                    <p> <?= $singleFood->category->name; ?> </p>
                    <p> <?= $singleFood->getTarget(); ?> </p>
                </div>
            </div>
            <?php }; ?>

            <?php foreach ($petBeds as $singlePetBed) { ?>
            <div class="card col-6" style="width: 18rem;">
                <img src="<?= $singlePetBed->getImage() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?= $singlePetBed->getTitle(); ?> </h5>
                    <p class="card-text"> <?= $singlePetBed->getPrice(); ?> </p>
                    <p> <?= $singlePetBed->getTypeOf(); ?> </p>
                    <p> <?= $singlePetBed->category->name; ?> </p>
                    <p> <?= $singlePetBed->getColor(); ?> </p>
                    <p> <?= $singlePetBed->getSeason(); ?> </p>
                </div>
            </div>
            <?php }; ?>

            <?php foreach ($toys as $singleToy) { ?>
            <div class="card col-6" style="width: 18rem;">
                <img src=" <?= $singleToy->getImage() ?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?= $singleToy->getTitle(); ?> </h5>
                    <p class="card-text"> <?= $singleToy->getPrice(); ?> </p>
                    <p> <?= $singleToy->getTypeOf(); ?> </p>
                    <p> <?= $singleToy->category->name; ?> </p>
                    <p> <?= $singleToy->getColor(); ?> </p>
                    <p> <?= $singleToy->getWeight(); ?> </p>
                </div>
            </div>
            <?php }; ?>

        </div>


    </main>

</body>

</html>