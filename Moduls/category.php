<?php
    class category extends products{
        public $breed;
        public function __construct($image, $breed){
            parent::__construct($image);
            $this->breed = $breed;
        }
    }
?>