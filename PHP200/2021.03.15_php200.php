<?php
    //﻿031 반복문에서 스킵하기 continue
    for ($i = 0; $i < 10; $i++) 
    {
        if($i == 5)
        {
            continue;
        }
        echo $i.",";
    }
    echo "<br>";
?>
<?php
    //﻿032 반복문 속 for 반복문
    for ($i = 0; $i < 3; $i++) 
    {
        echo "바깥쪽 for문 횟수 : {$i}<br>";
        
        for ($n = 1; $n <= 3; $n++)
        {
            echo "안쪽 for문 횟수 : {$n}<br>";
        }
        
        echo "<br>";
    }
    
    for ($i = 2; $i < 4; $i++)
    {
        
        for ($n = 1; $n < 10; $n++)
        {
            echo $i."*".$n."=".$i*$n."<br>";
        }
        
        echo "<br>";
    }
?>
<?php
    //﻿033 ﻿forech() 반복문 사용하기
    $a = ['a','b','c','d'];
    $count = count($a);
    for ($i = 0; $i < $count; $i++) 
    {
        echo $a[$i];
    }
    
    echo "<br>";
    
    foreach ($a as $value)
    {
        echo $value;
    }
    
    echo "<br>";
    
    $b[0] = ['name'=>'미우'];
    $b[1] = ['name'=>'로아'];
    $b[2] = ['name'=>'마크'];
    
    foreach ($b as $value)
    {
        echo $value['name']."<br>";
    }
?>
<?php
    $b2 = ['name'=>'미우','id'=>'miu'];
    foreach ($b2 as $index =>$value)
    {
        echo "인덱스". $index.'의 값 '.$value."<br>";
    }
?>
























