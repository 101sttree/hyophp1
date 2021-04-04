<?php
    //001 echo
    echo "안녕하세요";
    echo '<br>';
    echo '반갑습니다.';
    echo '<br>';
    echo 1234;
    echo '<br>';
    echo "4월 4일에 태어났습니다.";
    
    echo '<br>';
    echo '<br>';
    //002 print
    print "안녕하세요";
    print "<br>";
    print "반갑습니다.";
    print "<br>";
    print 1234;
    print "<br>";
    print "4월  4일에 태어났습니다.";
    
    echo '<br>';
    //003 주석
    //echo '싱글라인 주석';
    /* echo '멀티라인 주석';
    echo '멀티라인 주석';
    echo '멀티라인 주석'; */
    
    echo '<br>';
    //004 변수 선언
    $num = 4;
    echo "변수 num의 값은 {$num} 입니다.";
    
    echo '<br>';
    echo '<br>';
    //005 변수명 짓기 규칙과 값 대입하기
    $num2 = "변수명 num2";
    echo $num2;
    echo "<br>";
    
    $num3num = "변수명 num3num";
    echo $num3num;
    echo "<br>";
    
    $_num = "변수명 _num";
    echo $_num;
    echo "<br>";
    
    $_num = "변수명 _num";
    echo $_num;
    echo "<br>";
    
    $Num = "변수명 Num";
    echo $Num;
    echo "<br>";
    
    $num = "변수명 Num";
    echo $num;
    echo "<br>";
    
    $str = "선생님은 말씀하셨다. \"여기까지가 시험범위입니다.\"";
    echo $str;
    
    echo '<br>';
    echo '<br>';
    //006 연결 연산자 사용하기
    
    $str = "안녕";
    $str2 = "하세요";
    
    echo $str.$str2;
    echo '<br>';
    
    echo "안녕"."하세요";
    echo '<br>';
    
    echo $str."(이)라고 그가 말했다";
    
    echo '<br>';
    echo '<br>';
    //007 상수
    define("A", "b");
    echo "상수 A의 값은".A."<br>";
    define("A", "c");
    echo "상수 A의 값은".A."<br>";
    
    echo '<br>';
    echo '<br>';
    //008 연산자
    //더하기
    $sum = 5 + 5;
    echo "5 더하기  5는".$sum;
    echo '<br>';
    //빼기
    $minus = 5 - 2;
    echo "5 뺴기  2는".$minus;
    echo '<br>';
    //곱하기
    $mul = 5 * 2;
    echo "5 곱하기  2는".$mul;
    echo '<br>';
    //나누기
    $division = 6 / 3;
    echo "6 나누기  3은".$division;
    echo '<br>';
    //나머지
    $rest = 5 % 3;
    echo "5 나누기 3의 나머지 값은".$rest;
    echo '<br>';
?>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    