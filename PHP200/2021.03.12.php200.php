<?php 
    
    //009 대입 연산자
    // += 활용
    $num = 10;
    $num += 2;
    echo "[+=사용] 변수  num 값은 ".$num."<br/>";
    
    // -= 활용
    $num = 10;
    $num -= 2;
    echo "[-=사용] 변수  num 값은 ".$num."<br/>";
    
    // *= 활용
    $num = 10;
    $num *= 2;
    echo "[*=사용] 변수  num 값은 ".$num."<br/>";
    
    // /= 활용
    $num = 10;
    $num /= 2;
    echo "[*=사용] 변수  num 값은 ".$num."<br/>";
    
    
    // %= 활용
    $num = 10;
    $num %= 3;
    echo "[%=사용] 변수  num 값은 ".$num."<br/>";
    
    // .= 활용
    $city = "서울";
    $city .= "특별시";
    echo "[.=사용] 변수  num 값은 ".$city."<br/>";
    echo "<br>";
    
    //010 증감 연산자
    $num = 10;
    echo "num++의 값 : ".$num++;
    
    echo "<br>";
    
    echo "num++가 작동 후의 값 : ".$num;
    
    echo "<br>";
    
    echo "++num가 작동 후의 값 : ".++$num;
    
    //011 배열
    $earth = array();
    
    $earth[0] = 'korea';
    echo "<br>";
    echo "earth 배열의  0 인덱스는 ". $earth[0];
    
    //012 배열 인덱스를 문자로 적용
    $earth2['nation'] = 'korea';
    echo "<br>";
    echo "earth 배열의  nation 인덱스는 ". $earth2['nation'];
    echo "<br>";
    echo "<br>";
    //013 배열에 배열 적용
    $dr = array();
    
    $dr['continent'] = array();
    $dr['continent']['america'] = array();
    $dr['continent']['america'][0] = '에너하임';
    $dr['continent']['america'][1] = '올랜도';
    
    $dr['continent']['asia'] = array();
    $dr['continent']['asia'][0] = '우라야스';
    $dr['continent']['asia'][1] = '홍콩';
    $dr['continent']['asia'][2] = '상하이';
    
    $dr['continent']['europe'] = array();
    $dr['continent']['europe'][0] = '파리';
    
    echo '다음 도시의 공통점은?';
    echo '<br><br>';
    echo '아메리카  : <br>';
    echo $dr['continent']['america'][0].'<br>';
    echo $dr['continent']['america'][1].'<br>';
    echo "<br>";
    
    echo '아시아  : <br>';
    echo $dr['continent']['asia'][0].'<br>';
    echo $dr['continent']['asia'][1].'<br>';
    echo $dr['continent']['asia'][2].'<br>';
    echo "<br>";
    
    echo '유럽  : <br>';
    
    echo $dr['continent']['europe'][0];
    echo "<br>";
    echo "<br>";
    
    //014 배열에 값 추가하기
    $fruit = array();
    
    array_push($fruit,'apple', 'banana', 'grape', 'coconut', 'tangerine');
    
    echo $fruit[0]."<br>";
    echo $fruit[1]."<br>";
    echo $fruit[2]."<br>";
    echo $fruit[3]."<br>";
    echo $fruit[4]."<br>";
    
    //015 배열의 구조 보기
    
    $dr = array();
    
    $dr['continent'] = array();
    $dr['continent']['america'] = array();
    $dr['continent']['america'][0] = '에너하임';
    $dr['continent']['america'][1] = '올랜도';
    
    $dr['continent']['asia'] = array();
    $dr['continent']['asia'][0] = '우라야스';
    $dr['continent']['asia'][1] = '홍콩';
    $dr['continent']['asia'][2] = '상하이';
    
    $dr['continent']['europe'] = array();
    $dr['continent']['europe'][0] = '파리';
    
    echo "<pre>";
    echo var_dump($dr);
    echo "<pre>";
    
    echo "<br>";
    echo "<br>";
    
    //016 배열에 인덱스를 지정하지 않고 값 입력하기
    
    $fruit2 = array();
    $fruit2 = [1,2,3,4,5,6];
    
    echo $fruit2[0];
    echo "<br>";
    echo $fruit2[2];
    
    echo "<br>";
    echo "<br>";
    
    //﻿017 list( ) 함수를 이용한 배열의 값 출력하기
    $fruit3 = array();
    $fruit3 = [11,22,33];
    
    list($first, $second, $third) = $fruit3;
    
    echo $second;
    
    echo "<br>";
    echo "<br>";
    
    //018 특정 범위의 수를 배열로 만들기
    $num2 = range(1,10);
    echo "<pre>";
    var_dump($num2);
    echo "<br>";
    $num3 = range(1,10,3);
    echo "<pre>";
    var_dump($num3);
    
    echo "<br>";
    echo "<br>";
    
    //019 배열의 값 개수 확인하기
    $arr = range(1,10,3);
    echo "배열 arr의 값의 수는 :".count($arr);
    
    echo "<br>";
    echo "<br>";
    
    //020 데이터 형
    $a = 12;
    echo "\$a의 데이터형(값 {$a})은 ".gettype($a);
    echo "<br>";
    $a1 = "안녕";
    echo "\$a의 데이터형(값 {$a1})은 ".gettype($a1);
    echo "<br>";
    $a2 = "121212";
    echo "\$a의 데이터형(값 {$a2})은 ".gettype($a2);
    echo "<br>";
    $a3 = array();
    echo "\$a의 데이터형(값 {$a3})은 ".gettype($a3);
    echo "<br>";
    $a4 = null;
    echo "\$a의 데이터형(값 {$a4})은 ".gettype($a4);
    echo "<br>";
    $a5 = true;
    echo "\$a의 데이터형(값 {$a5})은 ".gettype($a5);
    echo "<br>";
?>
























