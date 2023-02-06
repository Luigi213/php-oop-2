<?php 
    include __DIR__. '/Moduls/products.php';
    include __DIR__. '/Moduls/characteristicsMaterials.php';
    include __DIR__. '/Moduls/characteristicsFoods.php';
    include __DIR__. '/Moduls/ingredients.php';
    
    $first_product = new characteristicsFoods('https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg','€ 43,99','Cane', '545g', $first_ingredient->getIngredient());
    $second_product = new characteristicsFoods('https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg','€ 44,99','Cane', '600g', $second_ingredient->getIngredient());
    $third_product = new characteristicsFoods('https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg','€ 34,99','Gatto', '400g', $third_ingredient->getIngredient());
    $fourth_product = new characteristicsFoods('https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg','€ 2,95','Pesce', '30g', $fourth_ingredient->getIngredient());
    $fifth_product = new characteristicsMaterials('https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg','€ 184,99','Uccello','legno', 'M: L 83 x P 67 x H 153 cm');
    $sixth_product = new characteristicsMaterials('https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg','€ 2,29','Pesce', 'Materiale espanso', 'ND');
    $seventh_product = new characteristicsMaterials('https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg','€ 13,49','Cane', 'Galleggia e rimbalza', '8,5 cm x 10 cm');
    $eighth_product = new characteristicsMaterials('https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg','€ 4,99','Gatto', 'Morbido con codina in corda', '8,5 cm x 10 cm');
?>