<?php
    include __DIR__. '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                <?php foreach($products as $product) { ?>
                    <div class="col-auto">
                        <div class="card">
                            <img src="<?php echo $product->image; ?>" class="card-img-top" alt="eighth_product">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->title; ?></h5>
                                <p class="card-text"><i class="fa-solid fa-cat"></i> <?php echo $product->breed; ?></p>
                                <p class="card-text">Prezzo: <?php echo $product->price; ?></p>
                                <?php if(get_class($product) == 'characteristicsFoods') { ?>
                                    <p class="card-text">Peso netto: <?php echo $product->weight; ?></p>                            
                                    <p class="card-text">Ingredienti: <?php echo $product->ingredient; ?></p>                            
                                <?php } elseif(get_class($product) == 'characteristicsMaterials') { ?>    
                                    <p class="card-text">Materiali: <?php echo $product->material; ?></p>
                                    <p class="card-text">Dimensioni: <?php echo $product->dimension; ?></p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>