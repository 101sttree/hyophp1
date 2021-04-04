<?php
    //041 문자열을 자릿수로 나누기
    $str = 'abcdABDC';
    echo substr($str, 0, 4);
    echo '<br>';
    $str2 = 'abcdABDC';
    echo substr($str2, -4, 4);
    echo '<br>';
?>
<?php
    //042 첫 글자를 대문자로 변경하기
    $str = 'abcd';
    echo ucfirst($str);
    echo '<br>';
?>
<?php
    //043 영문의 첫 글자를 대문자로 변경하기
    $str = 'abcd efg hijk';
    echo ucwords($str);
    echo '<br>';
?>
<?php
    //044 문자열 속에서 특정 문자의 위치 찾기
    $str = 'abcd efg hijk';
    echo strpos($str,'a');
    echo '<br>';
?>
<?php
    //045 변수의 존재 확인하기
    $str = 'abcd efg hijk';
    echo isset($str);
    echo '<br>';
    if(isset($str1))
    {
        echo "변수가 존재합니다.";
    }
    else
    {
        echo "변수가 존재하지 않습니다.";
    }
    echo '<br>';
?>
<?php
    //046 변수에 데이터형 적용하기
    $str = 'true';
    echo "변수  str의 데이터형 : ".gettype($str);
    
    echo '<br>';
    settype($str,'bool');
    echo "변수  str의 데이터형 : ".gettype($str);
    echo '<br>';
?>
<?php
    //047 변수의 값이 빈 값인지 확인하기
    $var = '';
    echo '값이 빈 문자열 경우';
    var_dump(empty($var));
    echo '<br>';
    
    $var = null;
    echo '값이 null인 경우';
    var_dump(empty($var));
    echo '<br>';
    
    $var = [];
    echo '값이 빈 배열인 경우';
    var_dump(empty($var));
    echo '<br>';
    
    $var = 0;
    echo '값이 정수 0인 경우';
    var_dump(empty($var));
    echo '<br>';
    
    $var = '0';
    echo '값이 문자열 0인 경우';
    var_dump(empty($var));
    echo '<br>';
    
    $var = 'string';
    echo '값이 문자열 string인 경우';
    var_dump(empty($var));
    echo '<br>';
?>
<?php
    //048 PHP 설정 보기
    //phpinfo();
    echo '<br>';
?>

<?php
    //049 타임스탬스 시간 확인하기
    echo time();
    echo '<br>';
?>
<?php
    //050 원하는 형식으로 시간 표시하기
    echo "현재 시간은 ".date("Y년 m월 d일 H시 i분 s초",time());
    echo '<br>';
?>




















