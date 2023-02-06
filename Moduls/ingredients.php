<?php
    class ingredients {
        public $ArrayIngredients;
        public function __construct($ingredient){
            $this->ArrayIngredients = $ingredient;
        }

        public function getIngredient(){
            $ingredients = '';
            foreach($this->ArrayIngredients as $ingredient){
                $ingredients .= $ingredient.' ';
            }
            return $ingredients;
        }
    }
    $first_ingredient = new ingredients(['proscutto,', 'riso']);
    $second_ingredient = new ingredients(['manzo,', 'cereali']);
    $third_ingredient = new ingredients(['tonno,', 'pollo,', 'proscutto']);
    $fourth_ingredient = new ingredients(['Pesci e sottoprodotti dei pesci,', 'Cereali,','Lieviti,', 'Alghe']);
?>