<?php
    class products {
        public $image;
        public $title;
        public $price;
        public $breed;
        public function __construct($images, $titles, $prices, $breed){
            $this->image = $images;
            $this->title = $titles;
            $this->price = $prices;
            $this->breed = $breed;
        }
    }
?>
