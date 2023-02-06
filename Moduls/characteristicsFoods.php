<?php
    class characteristicsFoods extends products {
        public $weights;
        public $ingredients;
        public function __construct($image, $price, $breed, $weight, $ingredient){
            parent::__construct($image, $price, $breed);
            $this->weights = $weight;
            $this->ingredients = $ingredient;
        }
    }
?>