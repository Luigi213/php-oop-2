<?php
    class characteristicsMaterials extends products {
        public $materials;
        public $dimensions;
        public function __construct($image, $price, $breed, $material, $dimension){
            parent::__construct($image, $price, $breed);
            $this->materials = $material;
            $this->dimensions = $dimension;
        }
    }
?>