<?php 
    include __DIR__. '/Moduls/products.php';
    include __DIR__. '/Moduls/characteristicsMaterials.php';
    include __DIR__. '/Moduls/characteristicsFoods.php';
    include __DIR__. '/Moduls/ingredients.php';

    $products = [
        new characteristicsFoods('https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY679_.jpg', 'Royal Canin Mini Adult' ,'€ 43,99','Cane', '545g', $first_ingredient->getIngredient()),
        new characteristicsFoods('https://m.media-amazon.com/images/I/6140DtuW+nL._AC_SX425_.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso','€ 44,99','Cane', '600g', $second_ingredient->getIngredient()),
        new characteristicsFoods('https://www.zoofood.it/wp-content/uploads/2021/03/40574_2.png', 'Almo Nature Cat Daily Lattina','€ 34,99','Gatto', '400g', $third_ingredient->getIngredient()),
        new characteristicsFoods('https://m.media-amazon.com/images/I/81A1J1l2kqL._AC_SY741_.jpg', 'Mangime per Pesci Guppy in Fiocchi','€ 2,95','Pesce', '30g', $fourth_ingredient->getIngredient()),
        new characteristicsMaterials('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610', 'Voliera Wilma in Legno','€ 184,99','Uccello','legno', 'M: L 83 x P 67 x H 153 cm'),
        new characteristicsMaterials('https://static.zoomalia.com/prod_img/4995/it_235577ef1154f3240ad5b9b413aa7346a1e1581673055.jpg', 'Cartucce Filtranti per Filtro EasyCrystal','€ 2,29','Pesce', 'Materiale espanso', 'ND'),
        new characteristicsMaterials('https://www.naturepetshop.it/wp-content/uploads/T1_1_1000x1000.jpg', 'Kong classic','€ 13,49','Cane', 'Galleggia e rimbalza', '8,5 cm x 10 cm'),
        new characteristicsMaterials('https://www.zampashop.com/9326-large_default/topo-gioco-per-gatti-con.jpg', 'Topini di peluche Trixie Gatto','€ 4,99','Gatto', 'Morbido con codina in corda', '8,5 cm x 10 cm'),
    ];
?>