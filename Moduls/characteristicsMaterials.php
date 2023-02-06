<?php
    class characteristicsMaterials extends products {
        public $material;
        public $dimension;
        public function __construct($images, $titles, $prices, $breed, $materials, $dimensions){
            parent::__construct($images, $titles, $prices, $breed);
            $this->material = $materials;
            $this->dimension = $dimensions;
        }
    }
?>