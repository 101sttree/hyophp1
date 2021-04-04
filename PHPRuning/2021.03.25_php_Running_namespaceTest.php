<?php
   
    
    

    class Entree
    {
        private     $name;
        protected   $ingredients = array();
        public function getName()
        {
            return $this -> name;
        }
        public function __construct($name, $ingredient)
        {
            if(! is_array($ingredient))
            {
                throw new \Exception('$ingredient가 배열이 아닙니다.');
            }
            $this -> name = $name;
            $this -> ingredients = $ingredient;
        }
        public function hasIngredient($ingredient)
        {
            return in_array($ingredient, $this -> ingredients);
        }
    }
    
    /* class PricedEntree extends Entree
    {
        public function __construct($name,$ingredients) 
        {
            parent::__construct($name, $ingredient);
            foreach ($this->ingredients as $ingredients)
            {
                if(! $ingredients instanceof Meals\Ingredient)
                {
                    throw new \Exception('$ingredients의 원소는
                                        Ingredient 객체여야 합니다.');
                }
            }
        }
        
        public function getCost() 
        {
            $cost =0;
            foreach ($this->ingredients as $ingredients)
            {
                $cost += $ingredients->getCost();
            }
            return $cost;
        }
    } */
    
?>
<?php 
    /* namespace Tiny;
    
    class Fruit 
    {
        public static function munch($bite) 
        {
            print "$bite 한 입 드셔보세요";
        }
    } */

    
?>
<?php 
    //\Tiny\Fruit::munch("바나나");
?>
<?php 
    /* use Tiny\Fruit as Snack;
    
    Snack::munch("딸기"); */
?>
<?php 
    /* class Ingredient 
    {
        public $price;
        public $name;
        
        public function __construct($price,$name)
        {
            $this -> price = $price;
            $this -> name = $name;
        }
        
        public function pricech($price) 
        {
            $this -> price = $price;
        }
    } */

?>