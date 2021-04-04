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
    $Route = "C:\Users\hyosin\Pictures\\";
    function returnimg(string $url, $alt = "", $height = 0, $width = 0)
    {
        $Route = $GLOBALS['Route'];
        echo "<img alt='$alt' src='$Route$url' width='$width' height='$height'/>";
    }
?>
