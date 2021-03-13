<?php 
    $str = (string) "문자열";
    echo "데이터 형 변경 전".gettype($str);
    echo "<br>";
    $str = (int) $str;
    echo "데이터 형 변경 후 값은".$str;
    
    echo "<br>";
    echo "<br>";
    
    $str = (string) "123문자열";
    echo "데이터 형 변경 전".gettype($str);
    echo "<br>";
    $str = (int) $str;
    echo "데이터 형 변경 후 값은".$str;
    
    echo "<br>";
    echo "<br>";
    
    $str = 86.44;
    echo "데이터 형 변경 전 데이터 형".gettype($str);
    echo "<br>";
    $str = (int) $str;
    echo "데이터 형 변경 후 데이터 형은".gettype($str)."값은".$str;
?>
























