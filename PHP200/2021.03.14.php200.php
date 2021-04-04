<?php 
    //021 데이터 형 변환
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
    
    //022 if 조건문
    $a = 10;
    $b = 20;
    
    if($a == $b)
    {
        //조건 표현식이 참일 때 실행될 코드
    }
    echo "<br>";
    echo "<br>";
    $gender = "boy";
    $likePlace = "disneyland";
    
    if($gender == "boy" && $likePlace == "disneyland")
    {
        echo "소년은 디즈니랜드를 좋아합니다.";
    }
    echo "<br>";
    
    $gender = "girl";
    $likePlace = "Universal Studios";
    
    if ($gender == "girl" && $likePlace == "disneyland") 
    {
        echo "소녀는 디즈니랜드를 좋아합니다.";
    }
    
    echo "<br>";
    echo "<br>";
    
    //023﻿ if 조건문의 조건이 거짓이면 else문 사용
    $num1 = 3;
    $num2 = 4;
    
    if ($num1 == $num2) 
    {
        echo "변수num1과 num2의 값은 같습니다.";
    }
    else 
    {
        echo "변수num1과 num2의 값은 같지 않습니다.";
    }
    
    echo "<br>";
    echo "<br>";
    
    $gender = "girl";
    $likePlace = "Universal Studios";
    
    if ($gender == "girl" && $likePlace == "disneyland")
    {
        echo "소녀는 디즈니랜드에 가는것을 좋아합니다.";
    }
    else if($gender == "girl" && $likePlace == "Universal Studios") 
    {
        echo "소녀는 유니버셜 스튜디오에 가는것을 좋아합니다.";
    }
    else 
    {
        echo "소녀는 무엇도 좋아하지 않습니다.";
    }
    echo "<br>";
    echo "<br>";
    
    //025 swich문 사용 방법
    switch ("변수 or 조건식")
    {
        case "일치하는지 비교할 값 또는 조건" :
            "실행할 명령문";
        case 2 :
            echo 2;
        case 3 :
            echo 3;
        default : //case문에 일치하는 대상이 없을때 실행되는 명령문
            echo 4;
        break;    
        //case문에 일치하여 명령이 실행될 경우 
        // 다음 case문을 확인하지 않고 종료하는 명령문            
    }
    
    echo "<br>";
    echo "<br>";
    
    $name = "mickey";
    switch ($name)
    {
        case "mickey" :
            echo "미키";
            break;
        case "minnie" :
            echo "미니";
            break;
        case "stellalou" :
            echo "스텔라루";
            break;
        case "duffy" :
            echo "더피";
            break;
        
        default :
            echo "무엇도 좋아하지 않습니다.";
            break;
    }
    
    echo "<br>";
    echo "<br>";
    
    //026 else문에 switch문 사용하기
    $gender = "woman";
    $likePlace = "Universal Studios";
    
    if ($gender == "man") 
    {
        echo "only woman";
    }
    else switch ($likePlace)
    {
        case "disneyland":
            echo "디즈니 랜드를 좋아합니다.";
            break;
        case "disneysea":
            echo "디즈니씨를 좋아합니다.";
            break;
        case "Universal Studios":
            echo "유니버셜 스튜디오를 좋아합니다.";
            break;
        default:
            echo "아무것도 좋아하지 않습니다.";
    }
    echo "<br>";
    echo "<br>";
    
    //027 ﻿switch문의 case문에 조건 사용하기
    $age = 24;
    
    switch ($age)
    {
        case ($age >= 10 && $age <= 19):
            echo "10대입니다.";
            break;
        case ($age >= 20 && $age <= 29):
            echo "20대입니다.";
            break;
        case ($age >= 30 && $age <= 39):
            echo "30대입니다.";
            break;
    }
    echo "<br>";
    echo "<br>";
    
    //028 for반복문
    for ($i = 1; $i <= 10; $i++) 
    {
        echo $i.", ";    
    }
    
    echo "<br>";
    echo "<br>";
    
    //﻿029 for반복문 안 if 조건문 사용하기
    $sum = 0;
    $maxValue = 50;
    
    for($i = 1; $i <= $maxValue; $i++)
    {
        if ($i % 2 == 0) 
        {
            $sum += $i;
        }
    }
    
    echo "1부터 {$maxValue}까지의 짝수 누적합 : {$sum}";
    
    echo "<br>";
    echo "<br>";
    
    //﻿030 반복문에서 빠져나오기 break
    for ($i = 0; $i < 10; $i++) 
    {
        if ($i == 5) 
        {
            break;
        } 
        echo $i.", ";
    }
    
    
?>
























