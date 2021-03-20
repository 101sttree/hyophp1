<?php
    //056 1초 이하의 시간 확인하기
    echo microtime(true);
    echo "<br>";
?>
<?php
    //057 가장 큰 값 구하기
    $a = range(1, 1000);
    echo "가장 큰 수  : ".max($a);
    echo "<br>";
?>
<?php
    //058 가장 낮은 값 구하기
    $b = [5,3,100,749,9663];
    echo "가장 작은 수  : ".min($b);
    echo "<br>";
?>
<?php
    //059 실수 반올림하기
    $c = 16.78;
    $round = round($c,1);
    echo $round;
    
    $c2 = 1678;
    $round2 = round($c2,2);
    echo $round2;
    echo "<br>";
?>
<?php
    //060 실수 내림하기
    $c = 12.68;
    $floor = floor($c);
    echo  $floor;
    echo "<br>"; 
?>
<?php
    //061 실수 올림하기
    $c = 12.68;
    $ceil = ceil($c);
    echo  $ceil;
    echo "<br>"; 
?>
<?php
    //062 숫자를 3자리씩 구분하여 , 표시하기
    $num = 123456789.123;
    echo number_format($num,2,'-',':');
    echo "<br>";
?>
<?php
    //063 랜덤값 구하기
    $randNum = rand(1,3);
    $kawibawibo = '';
    
    switch ($randNum)
    {
        case 1:
            $kawibawibo = '가위';
            break;
        case 2:
            $kawibawibo = '바위';
            break;
        case 3:
            $kawibawibo = '보';
            break;
        default:            
            $kawibawibo = '';
            break;
    }
    
    echo "컴퓨터의 선택은 : {$kawibawibo}";
    echo "<br>";
?>
<?php
    //064 함수 만들기
    function outputHello() 
    {
        echo "hello world";
    }
    echo "<br>";
?>
<?php
    //065 함수 호출하기
    function outputHello() 
    {
        echo "hello world";
    }
    outputHello();
?>













