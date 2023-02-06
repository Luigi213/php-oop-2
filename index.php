<?php
    include __DIR__. '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./css/style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Boolshop</h1>
                </div>
                <div class="col-12">
                    <h2>I nostri pordotti</h2>
                </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                <div class="col-auto">
                    <div class="card">
                        <img src="<?php echo $first_product->image; ?>" class="card-img-top" alt="first_product">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $first_product->title; ?></h5>
                            <p class="card-text"><i class="fa-solid fa-dog"></i> <?php echo $first_product->breed; ?></p>
                            <p class="card-text">Prezzo: <?php echo $first_product->price; ?></p>
                            <p class="card-text">Peso netto: <?php echo $first_product->weight; ?></p>
                            <p class="card-text">Ingredienti: <?php echo $first_product->ingredient; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card">
                        <img id="sp-img" src="<?php echo $second_product->image; ?>" class="card-img-top" alt="second_product">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $second_product->title; ?></h5>
                            <p class="card-text"><i class="fa-solid fa-dog"></i> <?php echo $second_product->breed; ?></p>
                            <p class="card-text">Prezzo: <?php echo $second_product->price; ?></p>
                            <p class="card-text">Peso netto: <?php echo $second_product->weight; ?></p>
                            <p class="card-text">Ingredienti: <?php echo $second_product->ingredient; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card">
                        <img src="<?php echo $third_product->image; ?>" class="card-img-top" alt="third_product">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $third_product->title; ?></h5>
                            <p class="card-text"><i class="fa-solid fa-cat"></i> <?php echo $third_product->breed; ?></p>
                            <p class="card-text">Prezzo: <?php echo $third_product->price; ?></p>
                            <p class="card-text">Peso netto: <?php echo $third_product->weight; ?></p>
                            <p class="card-text">Ingredienti: <?php echo $third_product->ingredient; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card">
                        <img src="<?php echo $fourth_product->image; ?>" class="card-img-top" alt="fourth_product">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fourth_product->title; ?></h5>
                            <p class="card-text"><i class="fa-solid fa-fish"></i> <?php echo $fourth_product->breed; ?></p>
                            <p class="card-text">Prezzo: <?php echo $fourth_product->price; ?></p>
                            <p class="card-text">Peso netto: <?php echo $fourth_product->weight; ?></p>
                            <p class="card-text">Ingredienti: <?php echo $fourth_product->ingredient; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card pb-4">
                        <img src="<?php echo $fifth_product->image; ?>" class="card-img-top" alt="fifth_product">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $fifth_product->title; ?></h5>
                            <p class="card-text"><i class="fa-solid fa-dove"></i> <?php echo $fifth_product->breed; ?></p>
                            <p class="card-text">Prezzo: <?php echo $fifth_product->price; ?></p>
                            <p class="card-text">Materiale: <?php echo $fifth_product->material; ?></p>
                            <p class="card-text">Dimensioni: <?php echo $fifth_product->dimension; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card pb-4">
                        <img src="<?php echo $sixth_product->image; ?>" class="card-img-top" alt="sixth_product">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $sixth_product->title; ?></h5>
                            <p class="card-text"><i class="fa-solid fa-fish"></i> <?php echo $sixth_product->breed; ?></p>
                            <p class="card-text">Prezzo: <?php echo $sixth_product->price; ?></p>
                            <p class="card-text">Materiale: <?php echo $sixth_product->material; ?></p>
                            <p class="card-text">Dimensioni: <?php echo $sixth_product->dimension; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card pb-4">
                        <img src="<?php echo $seventh_product->image; ?>" class="card-img-top" alt="seventh_product">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $seventh_product->title; ?></h5>
                            <p class="card-text"><i class="fa-solid fa-dog"></i> <?php echo $seventh_product->breed; ?></p>
                            <p class="card-text">Prezzo: <?php echo $seventh_product->price; ?></p>
                            <p class="card-text">Materiale: <?php echo $seventh_product->material; ?></p>
                            <p class="card-text">Dimensioni: <?php echo $seventh_product->dimension; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="card pb-4">
                        <img src="<?php echo $eighth_product->image; ?>" class="card-img-top" alt="eighth_product">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $eighth_product->title; ?></h5>
                            <p class="card-text"><i class="fa-solid fa-cat"></i> <?php echo $eighth_product->breed; ?></p>
                            <p class="card-text">Prezzo: <?php echo $eighth_product->price; ?></p>
                            <p class="card-text">Materiale: <?php echo $eighth_product->material; ?></p>
                            <p class="card-text">Dimensioni: <?php echo $eighth_product->dimension; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>