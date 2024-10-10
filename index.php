<?php

require_once __DIR__ . '/classes/Products.php';
require_once __DIR__ . '/classes/Foods.php';
require_once __DIR__ . '/classes/PetBeds.php';

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

            <div class="card col-6" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> </h5>
                    <p class="card-text">
                        <?php var_dump(new Products('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.nutrixpiu.it%2Fnegozio%2Fcani-da-seguita%2F&psig=AOvVaw3evazt8FF-UycfdyAIRjLS&ust=1728654104142000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMCGl8b4g4kDFQAAAAAdAAAAABAE', 'Nutrix', 7.99, 'Cibo')); ?>
                    </p>
                    <p class="card-text">
                        <?php var_dump(new Foods('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.nutrixpiu.it%2Fnegozio%2Fcani-da-seguita%2F&psig=AOvVaw3evazt8FF-UycfdyAIRjLS&ust=1728654104142000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMCGl8b4g4kDFQAAAAAdAAAAABAE', 'Nutrix', 7.99, 'Cibo', 'Piccoli animali')); ?>
                    </p>
                </div>
            </div>



        </div>


    </main>

</body>

</html>