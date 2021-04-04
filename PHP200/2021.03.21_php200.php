<?php 
    //066 파라미터와 아규먼트
    //파라미터 2개를 가진 함수 sum작성
   /*  function sum($num1, $num2) 
    {
        $sum = $num1 + $num2;
        echo $sum;
    }
    
    //아규먼트 5와 10을 전달
    sum(5,10); */
?>
<?php 
    //067 함수에서 값 반환하기
    /* function sum($num1, $num2) 
    {
        $sum = $num1 + $num2;
        return $sum;
        echo '함수';
    }
    echo sum(5,10);
    $plus = sum(5,10);
    echo "<br>";
    echo $plus + 20; */
?>
<?php 
    //068 파라미터의 기본값 설정하기
    function sum($param1 = 50, $param2 = 100) 
    {
        $sum = $param1 + $param2;
        return $sum;
    }
    //아규먼트 모두 작성 후 호출
    echo "sum(5,10) =".sum(5,10);
    echo "<br>";
    //아규먼트 하나만 작성 후 호출
    echo "sum(5) =".sum(5);
    echo "<br>";
    //아규먼트 작성하지 않고 호출
    echo "sum() =".sum();
    echo "<br>";
?>
<?php 
    //069 $_SERVER 변수
    echo "현재 파일 경로 : ".$_SERVER['PHP_SELF']."<br>"; 
    echo "현재 실행 파일의 최상위 경로부터 표시 : ".$_SERVER['DOCUMENT_ROOT']."<br>"; 
    echo "현재 리퀘스트의 HOST헤더의 내용 : ".$_SERVER['HTTP_HOST']."<br>"; 
    echo "현재 리퀘스트의 CONNECTION 헤더 내용 :  ".$_SERVER['HTTP_CONNECTION']."<br>"; 
?>
<?php 
    //﻿070 하나의 파일을 여러 곳에서 사용하기 include
    include './70-1-include.php';
?>



























