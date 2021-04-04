<?php
    $a[0] = ['name'=>'미우','id'=>'miu'];
    
    foreach($a as $index => $value)
    {
        foreach($value as $index2 => $value2)
        {
            echo "인덱스 {$index2} 의 값 : {$value2}";
        }
    }
    echo "<br>";
?>
<?php
    
    //﻿034 ﻿while 반복문
    $sum = 0;
    $i = 0;
    while($i <= 10)
    {
        $sum += $i;
        $i ++;
    }
    echo "1부터 10까지의 누적합은 {$sum} 입니다.";
    //035 do-while 반복문
    echo "<br>";
    do
    {
        echo "거짓이여도 한번은 실행됩니다.";
    }
    while (FALSE);
    echo "<br>";
    echo "<br>";
?>
<?php
    
    //036 문자열의 시작과 끝에 있는 공백 제거하기
    $str  = "    공백확인    ";
    $str1 = "    공백확인    ";
    $str2 = "    공백확인    ";
    
    echo '|'.trim($str).'|';
    echo "<br>";
    echo '|'.ltrim($str1).'|';
    echo "<br>";
    echo '|'.rtrim($str2).'|';
    
    echo "<br>";
?>
<?php
    
    //037 문자열을 대문자로 출력하기
    $str = "asdfadf";
    echo strtoupper($str);
    echo "<br>";
    
    //038 문자열을 소문자로 출력하기
    $str = "ASDFADF";
    echo strtolower($str);
    echo "<br>";
?>
<?php
    
    //039 문자열의 수 세기
    $a = "abcdf";
    $b = "안녕하세요";
    echo "abcdf의 글자수 : ".strlen($a);
    echo "<br>";
    echo "안녕하세요의 글자수 : ".strlen($b);
    echo "<br>";
?>
<?php
    
    //040 문자열의 특정 문자를 치환하기
    $b = "반갑습니다 저는 박하박입니다.";
    $c = str_replace('박하박', 'PHP', $b);
    echo $c;
    echo "<br>";
?>























