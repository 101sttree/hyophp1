<?php 
    /* function A($a,$b,$c)
    {
        $sum = $a + $b + $c;
        $ab = $a * $b;
        $ac = $a * $c;
        $bc = $b * $c;
        
        return array($sum, $ab, $ac, $bc);
    }
    
    $A = A(1,2,3);
    if($A[0] == 6)
    {
        echo "함수로 인해 반환된 배열의 첫번째 값은  6입니다.";
    }
    else
    {
        echo "함수로 인해 반환된 배열의 첫번째 값은 6이 아닙니다.";
    }
    echo "<br>"; */
?>
<?php 
    function restaurant_check($meal, $tax, $tip)
    {
        $tax_amount = $meal *($tax / 100);
        $tip_amount = $meal * ($tip / 100);
        $total_amount = $meal + $tax_amount + $tip_amount;
        
        return $total_amount;
    }

    function payment_method($cash_on_hand, $amout)
    {
        if($amout > $cash_on_hand)
        {
            return '신용카드';
        }
        else
        {
            return '현금';
        }
    }
    
    $total = restaurant_check(15.22, 8.25, 15);
    $method = payment_method(20, $total);
    print "결제 방법은 ".$method."입니다.";
?>
<?php 
    /* if(restaurant_check(15.22, 8.25, 15) < 20)
    {
        print '$20 가 안되니, 현금으로 내야지';
    }
    else
    {
        print '너무 비싼데. 신용카드를 써야겠어';
    } */
?>
<?php 
    /* function restaurant_check($meal, $tax, $tip)
    {
        $tax_amount = $meal *($tax / 100);
        $tip_amount = $meal * ($tip / 100);
        $total_amount = $meal + $tax_amount + $tip_amount;
        
        return $total_amount;
    }
    
    function can_pay_cash($cash_on_hand, $amout)
    {
        if($amout > $cash_on_hand)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    $total = restaurant_check(15.22, 8.25, 15);
    if(can_pay_cash(20,$total))
    {
        print "현금으로 낼 수 있어";
    }
    else
    {
        print "신용카드를 써야겠네";
    } */
?>
<?php 
    /* function complete_bill($meal, $tax, $tip, $cash_on_hand)
    {
        $tax_amount = $meal *($tax / 100);
        $tip_amount = $meal * ($tip / 100);
        $total_amount = $meal + $tax_amount + $tip_amount;
        
        if($total_amount > $cash_on_hand)
        {
            return false;
        }
        else
        {
            return $total_amount;
        }
    }
    if($total = complete_bill(15.22, 8.25, 15, 20))
    {
        print "$total 정도면 딱 좋지";
    }
    else
    {
        print "제가 돈이 없어서 그러는데, 대신 접시라도 닦으면 안될까요?";
    }
    print "<br>"; */
?>
<?php 
    /* $dinner = "갑오징어 카레";
    
    function vegetarian_dinner()
    {
        print "저녁 메뉴는  $dinner, 또는";
        $dinner = '완두싹 볶음';
        print $dinner;
        print "입니다 <br>";
    }
    print "채식주의식";
    print "<br>";
    vegetarian_dinner();
    print "<br>";
    print "일반 저녁 메뉴는  $dinner 입니다"; */
?>
<?php 
    /*$dinner = "갑오징어 카레";
    
    function macrobiotic_dinner()
    {
        $dinner = '모둠 채소';
        print "저녁 메뉴는  $dinner 입니다";
        print "하지만 저는";
        print $GLOBALS['dinner'];
        print "를 먹겠어요";
        print "<br>";
    }
   
    macrobiotic_dinner();
    print "일반 저녁 메뉴 :  $dinner";*/
?>
<?php 
    /* $dinner = "갑오징어 카레";
    
    function hungry_dinner()
    {
       $GLOBALS['dinner'].=' 그리고 바싹 익힌 토란';
    }
   
    
    print "일반 저녁 메뉴 :  $dinner";
    print "<br>";
    hungry_dinner();
    print "저녁 특선 메뉴는 $dinner 입니다."; */
?>
<?php 
    /* $dinner = "갑오징어 카레";
    
    function vegetarian_dinner()
    {
       global $dinner;
       print "저녁 메뉴는 $dinner 였습니다만, 지금은\n";
       $dinner = '완두싹 볶음';
       print $dinner;
       print "입니다.";
    }
   
    
    print "일반 저녁 메뉴는  $dinner 입니다.";
    print "<br>";
    vegetarian_dinner();
    print "<br>";
    print "일반 저녁 메뉴는  $dinner 입니다.\n"; */
?>
<?php 
    /* function countdown(int $top) 
    {
        while($top > 0)
        {
            print "$top";
            $top--;
        }
        print "펑";
    }
    $counter = 5;
    countdown("안녕");  */   
?>



















