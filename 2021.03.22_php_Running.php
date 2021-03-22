<?php 
    class Entree 
    {
        public $name;
        public $ingredients = array();
        
        public function hasIngredient($ingredient) 
        {
            return in_array($ingredient, $this -> ingredients);
        }
        
        public static function getSize()
        {
            return array('소','중','대');
        }
    }
    
    $sizes = Entree::getSize();
    
    $soup = new Entree;
    $soup -> name = '닭고기 수프';
    $soup -> ingredients = array('닭고기', '물');
    
    $sandwich = new Entree;
    $sandwich -> name = '닭고기 샌드위치';
    $sandwich -> ingredients = array('닭고기', '빵');
    
    foreach (['닭고기','레몬','빵','물'] as $ing)
    {
        if($soup->hasIngredient($ing))
        {
            print "수프의 재료 : $ing.\n";
        }
        if($sandwich->hasIngredient($ing))
        {
            print "샌드위치의 재료 : $ing.\n";
        }
    }
?>