<?php
    class products {
        public $images;
        public $prices;
        public $breed;
        public function __construct($image, $price, $breed){
            $this->images = $image;
            $this->prices = $price;
            $this->breed = $breed;
        }
    }
?>
