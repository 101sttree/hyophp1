<?php 
    /* require '﻿restauran-functions.php';
    
    $total_bill = restaurant_check(25, 8.875, 20);
    
    $cash = 30;
    
    print "결제 방법은".payment_method($cash, $total_bill); */
?>
<?php 
    /* function returnimg($url, $alt = "", $height = 0, $width = 0)
    {
        echo "<img alt='$alt' src='$url' width='$width' height='$height'/>";
    } */
?>
<?php
    /* $Route = "C:\Users\hyosin\Pictures";
    function returnimg(string $url, $alt = "", $height = 0, $width = 0)
    {
        $Route = $GLOBALS['Route'];
        echo "<img alt='$alt' src='$Route.$url' width='$width' height='$height'/>";
    } */
?>
<?php 
    require '﻿imgfun.php';
    echo "<html><body>";
    returnimg("M_Photo_View","",100,100);
    echo "</body></html>";
?>
<?php 
    function restaurant_check($meal, $tax, $tip)
    {
        $tax_amount = $meal *($tax / 100);
        $tip_amount = $meal * ($tip / 100);
        
        return $meal + $tax_amount + $tip_amount;
    }
    
    $cash_on_hand = 31;
    $meal = 25;
    $tax = 10;
    $tip = 10;
    
    while(($cost = restaurant_check($meal, $tax, $tip)) < $cash_on_hand)
    {
        $tip++;
        print "팁으로 $tip% ($cost) 정도는 낼 수 있지\n";
    }
?>
<?php 
    function colorchange($red, $green, $blue)
    {
        print "#";
        printf("%02s%02s%02s\n",dechex($red),dechex($green),dechex($blue));
    }
    colorchange(255,0,255);
?>
<?php 
    function html_img2($file, $alt = null, $height = null, $width = null)
    {
        if(isset($GLOBALS['image_path']))
        {
            $file = $GLOBALS['image_path'].$file;
        }
        
        $html = '<img src="'.$file.'"';
        if(isset($alt))
        {
            $html .= 'alt="'.$alt.'"';
        }
        if(isset($height))
        {
            $html .= 'alt="'.$height.'"';
        }
        if(isset($width))
        {
            $html .= 'alt="'.$width.'"';
        }
        $html .= '/>';
        return $html;
    }
?>
<?php 
    include 'html_img2.php';
    
    $image_path = '/image/';
    
    print html_img2('puppy.png');
    print html_img2('kitten.png','fuzzy');
    print html_img2('dragon.png',null,640,480);
?>
<?php
    //dechex() 함수 사용
    function web_color1($red,$green,$blue)
    {
        $hex = [dechex($red),dechex($green),dechex($blue),];
        
        foreach($hex as $i => $val)
        {
            if(strlen($i) == 1)
            {
                $hex[$i] = "0$val";
            }
        }
        return '#'.implode('',$hex);
    }
    
    //sprintf() 함수 사용
    function web_color2($red,$green,$blue)
    {
        return sprintf('#%02x%02x%02x',$red,$green,$blue);
    }
?>



























