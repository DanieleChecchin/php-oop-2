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
$food1 = new Foods('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.obi-italia.it%2Farticoli-per-animali%2Farticoli-per-cani%2Fc%2F3747&psig=AOvVaw3KwR5v52CJiQ5Mv3fnjQmd&ust=1728657964735000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCLjknvqGhIkDFQAAAAAdAAAAABAE', 'Special Food', 7.99, 'Cibo', $dog, 'Cani adulti');
$food2 = new Foods('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dm-drogeriemarkt.it%2Fwhiskas-croccantini-per-gatti-adulti-con-tonno-p5900951283734.html&psig=AOvVaw2h294smF8Df7-qDwNTtbbf&ust=1728659137711000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJCn_KGLhIkDFQAAAAAdAAAAABAE', 'Whiskas', 5.99, 'Cibo', $cat, 'Gatti cuccioli');

$foods = [
    $food1,
    $food2
];

// CUCCE
$petBed1 = new PetBeds('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.satur.it%2Fcuccia-jeans-estiva-46x38-cm-in-oxford-duppid-249-5907036.html&psig=AOvVaw0C7W1ZdoWmx4dr8PLX0zjj&ust=1728660092337000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPjS_eeOhIkDFQAAAAAdAAAAABAE', 'Satur', 25.99, 'Cuccia', $dog, 'Grigia', 'Estiva');
$petBed2 = new PetBeds('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.it%2FImpermeabile-Resistente-Intemperie-Forniture-60x43x40cm%2Fdp%2FB0CPDXVJJN&psig=AOvVaw0xY9kIiZAoUbUiZHaN76X4&ust=1728660545557000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOimqMKQhIkDFQAAAAAdAAAAABAE', 'Cpaps', 38.99, 'Cuccia', $cat, 'Nero', 'Invernale');

$petBeds = [
    $petBed1,
    $petBed2
];

// GIOCATTOLI
$toy1 = new AnimalToys('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.arcaplanet.it%2Fgioco-cane-peluche-corda-tigre%2Fp&psig=AOvVaw3pwi_DFRoIJW64kx3xZMbL&ust=1728661083562000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCPCyn8KShIkDFQAAAAAdAAAAABAE', 'Lovedi', 15.99, 'Giocattolo', $dog, 'Marrone', 0.300);
$toy2 = new AnimalToys('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.zoomalia.it%2Fnegozio-di-animali%2Fgiocattolo-gatto-duo-topo-con-piume-5-cm-p-29815.html&psig=AOvVaw1yldhsVLRNfiQ_ibfim6vM&ust=1728661249216000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMjMjJGThIkDFQAAAAAdAAAAABAE', 'Zolux', 22.99, 'Giocattolo', $cat, 'Bianco e Nero', 0.150);

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
                <img src="..." class="card-img-top" alt="...">
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
                <img <?= $singlePetBed->getImage(); ?> class="card-img-top" alt="...">
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
                <img src="..." class="card-img-top" alt="...">
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