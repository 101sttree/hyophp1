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
                throw new Exception('$ingredient가 배열이 아닙니다.');
            }
            $this -> name = $name; 
            $this -> ingredients = $ingredient; 
        }
        public function hasIngredient($ingredient) 
        {
            return in_array($ingredient, $this -> ingredients);
        }
    }
    class ComboMeal extends Entree
    {
        public function __construct($name, $entrees)
        {
            parent::__construct($name, $entrees);
            foreach ($entrees as $entree)
            {
                if(!$entree instanceof Entree)
                {
                    throw new Exception('$entrees의 원소는 객체여야 합니다.');
                }
            }
        }
        public function hasIngredient($ingredient) 
        {
            foreach ($this-> ingredients as $entree);
            {
                //현재 클래스의 배열 속성을 순회 원소는 인스턴스
                //인스턴스의 hasIngredient() 실행
                if($entree->hasIngredient($ingredient))
                {
                    return true;
                }
            }
            return false;
        }
        
    }
    
    $soup       = new Entree('닭고기 수프',       array('닭고기','물'));
    $sandwich   = new Entree('닭고기 샌드위치',    array('닭고기','빵'));
    $combo      = new ComboMeal('수프 +샌드위치', array($sandwich,$soup));
    foreach (['닭고기','물','피클'] as $ing)
    {
        if($combo->hasIngredient($ing))
        {
            print "세트 메뉴에 들어가는 재료 : $ing.\n";
        }
        
    }
    
    //$sizes = Entree::getSize();
    
    /* $soup = new Entree;
    $soup -> name = '닭고기 수프';
    $soup -> ingredients = array('닭고기', '물');
    
    $sandwich = new Entree;
    $sandwich -> name = '닭고기 샌드위치';
    $sandwich -> ingredients = array('닭고기', '빵'); */
    
    /* foreach (['닭고기','레몬','빵','물'] as $ing)
    {
        if($soup->hasIngredient($ing))
        {
            print "수프의 재료 : $ing.\n";
        }
        if($sandwich->hasIngredient($ing))
        {
            print "샌드위치의 재료 : $ing.\n";
        }
    } */
    
    /* try 
    {
        $a = new Entree('우유 한 잔', '우유');
        if ($a -> hasIngredient('우유'))
        {
            print '맛있어!';
        }
        
    } 
    catch (Exception $e) 
    {
        print '음료를 준비할 수 없습니다.'. $e -> getMessage();
    } */
   
    
?>
    
    
    
    
    
    
    
    
    
    
    