<?php
    class products {
        public $images;
        public $prices;
        public function __construct($image, $price){
            $this->images = $image;
            $this->prices = $price;
        }
    }
?>
