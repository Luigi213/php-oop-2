<?php
    class characteristicsFoods extends products {
        public $weight;
        public $ingredient;
        public function __construct($images, $titles, $prices, $breed, $weights, $ingredients){
            parent::__construct($images, $titles, $prices, $breed);
            $this->weight = $weights;
            $this->ingredient = $ingredients;
        }
    }
?>