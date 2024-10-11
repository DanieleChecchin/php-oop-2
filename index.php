<?php

require_once __DIR__ . '/classes/Products.php';
require_once __DIR__ . '/classes/Foods.php';
require_once __DIR__ . '/classes/PetBeds.php';
require_once __DIR__ . '/classes/AnimalToys.php';
require_once __DIR__ . '/classes/Category.php';
require_once __DIR__ . '/traits/Info.php';

//CATEGORIE
$dog = new Category('Cane', 'https://previews.123rf.com/images/dstarky/dstarky1701/dstarky170101131/69423991-icona-cane-o-il-logo-in-stile-linea-moderna-l-alta-qualit%C3%A0-pittogramma-contorno-nero-per-la.jpg');
$cat = new Category('Gatto', 'https://img.freepik.com/premium-photo/cat-logo-icon-silhouette-vector-style-with-white-background_1047546-8007.jpg');

// CIBO
$food1 = new Foods('https://m.media-amazon.com/images/I/41Y35B127wL._AC_UF894,1000_QL80_.jpg', 'Special Dog', 7.99, 'Cibo', $dog, 'Cani adulti');
$food2 = new Foods('https://fera24.it/images/thumbnails/960/1214/detailed/129/5900951299209F1.jpg', 'Whiskas', 5.99, 'Cibo', $cat, 'Gatti cuccioli');

//Trait
$food1->setInfo('Cibo di altà qualità per tutti i cani');
$food2->setInfo('Cibo di altà qualità per tutti i gatti');



$foods = [
    $food1,
    $food2
];

// CUCCE
$petBed1 = new PetBeds('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWWu3l-P-c_5OEEW6J-sxi3E3ZqTwrC4maPw&s', 'Satur', 25.99, 'Cuccia', $dog, 'Grigia', 'Estiva');
$petBed2 = new PetBeds('https://m.media-amazon.com/images/I/71cS+MII06L._AC_UF350,350_QL80_.jpg', 'Cpaps', 38.99, 'Cuccia', $cat, 'Nero', 'Invernale');

//Trait
$petBed1->setinfo('Una cuccia estiva perfetta per il tuo cane');
$petBed2->setinfo('Una cuccia invernale perfetta per il tuo gatto');

$petBeds = [
    $petBed1,
    $petBed2
];

// GIOCATTOLI
$toy1 = new AnimalToys('https://arcaplanet.vtexassets.com/arquivos/ids/283187/FP4.1.307-AP--1-.jpg?v=638158653329870000', 'Lovedi', 15.99, 'Giocattolo', $dog, 'Bianco e Nero', 0.300);
$toy2 = new AnimalToys('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfixc7loJc5-06DKyFRzKAmSBf8MJNd8QVEA&s', 'Zolux', 22.99, 'Giocattolo', $cat, 'Azzurro', 0.150);

//Trait
$toy1->setInfo('Un giocattolo a forma di mucca che il tuo cane amerà');
$toy2->setInfo('Un giocattolo formato gattino che il tuo gatto adorerà');

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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="fw-bold text-center mb-5">NEGOZIO ONLINE</h1>
            </div>
            <?php foreach ($foods as $singleFood) { ?>
            <div class="card col-6 food" style="width: 18rem;">
                <img src="<?= $singleFood->getImage() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold"> <?= $singleFood->getTitle(); ?> </h5>
                    <p class="card-text"> <span class="fst-italic">Prezzo:</span> <?= $singleFood->getPrice(); ?> </p>
                    <p> <span class="fst-italic">Tipo di prodotto:</span> <?= $singleFood->getTypeOf(); ?> </p>
                    <p> <span class="fst-italic">Pensato per:</span> <?= $singleFood->category->name; ?> </p>
                    <p> <span class="fst-italic">Indicato per:</span> <?= $singleFood->getTarget(); ?> </p>
                    <p> <span class="fst-italic">Descrizione:</span> <?= $singleFood->getInfo(); ?> </p>
                </div>
            </div>
            <?php }; ?>

            <?php foreach ($petBeds as $singlePetBed) { ?>
            <div class="card col-6 pet-bed" style="width: 18rem;">
                <img src="<?= $singlePetBed->getImage() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold"> <?= $singlePetBed->getTitle(); ?> </h5>
                    <p class="card-text"> <span class="fst-italic">Prezzo:</span> <?= $singlePetBed->getPrice(); ?> </p>
                    <p> <span class="fst-italic">Tipo di prodotto:</span> <?= $singlePetBed->getTypeOf(); ?> </p>
                    <p> <span class="fst-italic">Pensato per:</span> <?= $singlePetBed->category->name; ?> </p>
                    <p> <span class="fst-italic">Colore:</span> <?= $singlePetBed->getColor(); ?> </p>
                    <p> <span class="fst-italic">Stagione:</span> <?= $singlePetBed->getSeason(); ?> </p>
                    <p> <span class="fst-italic">Descrizione:</span> <?= $singlePetBed->getInfo(); ?> </p>
                </div>
            </div>
            <?php }; ?>

            <?php foreach ($toys as $singleToy) { ?>
            <div class="card col-6 toy" style="width: 18rem;">
                <img src=" <?= $singleToy->getImage() ?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bold"> <?= $singleToy->getTitle(); ?> </h5>
                    <p class="card-text"> <span class="fst-italic">Prezzo:</span> <?= $singleToy->getPrice(); ?> </p>
                    <p> <span class="fst-italic">Tipo di prodotto:</span> <?= $singleToy->getTypeOf(); ?> </p>
                    <p> <span class="fst-italic">Pensato per:</span> <?= $singleToy->category->name; ?> </p>
                    <p> <span class="fst-italic">Colore:</span> <?= $singleToy->getColor(); ?> </p>
                    <p> <span class="fst-italic">Peso:</span> <?= $singleToy->getWeight(); ?> </p>
                    <p> <span class="fst-italic">Descrizione:</span> <?= $singleToy->getInfo(); ?> </p>
                </div>
            </div>
            <?php }; ?>

        </div>


    </main>

</body>

</html>