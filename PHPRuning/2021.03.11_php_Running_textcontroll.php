<?php
    $price  = 5;
    $tax    = 0.075;
    printf('요리가격은 $%.2f',$price * (1 + $tax));
    
    $min = -40;
    $max = 40;
    
    printf("컴퓨터는 섭씨%+d도와 %+d도 사이에서 작동할 수 있습니다. ", $min, $max);
    
    print strtolower('Beff, CHICKEN, Pork, duCK');
    print strtoupper('Beff, CHICKEN, Pork, duCK');
    
    
?>