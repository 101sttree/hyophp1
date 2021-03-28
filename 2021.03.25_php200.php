<?php
    //071 하나의 파일을 여러 곳에서 사용하기 ﻿require
    //require './70-1-include.php';
?>
<?php 
    //072 include와 require를 한 번만 호출하기
    /* include './70-1-include.php';
    include_once './70-1-include.php'; */
?>
<?php 
    //073 정규표현식
    /* $pattern = '/^i+$/';
    $str = 'ii';
    
    if(preg_match($pattern, $str,$matches))
    {
        echo "값 {$str}은 정규식 표연헤 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }
    else
    {
        echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망";
    } */
    
?>
<?php 
    //074 정규표현식 한글 검사
    /* $pattern = '/^[가-힣]{3,}$/';
    $str = '웹코딩시작하기';
    if(preg_match($pattern, $str,$matches))
    {
        echo "값 {$str}은 정규식 표연에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }
    else
    {
        echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망";
    } */
   
?>
<?php 
    //075 정규표현식 영문 대문자 검사
    /* $pattern = '/^[A-Z]+$/';
    $str = 'TOMODEVEL';
    
    if(preg_match($pattern, $str, $matches))
    {
        echo "값 {$str}은 정규식 표연에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }
    else
    {
        echo "값에 영문 대문자 외의 문자가 있는지 확인 요망";
    } */
?>
<?php 
    //076 정규표현식 영문 소문자 검사
    /* $pattern = '/^[a-zA-Z가-힣 .]+$/';
    $str = '안녕하세요. Hello';
    
    if(preg_match($pattern, $str, $matches))
    {
        echo "값 {$str}은 정규식 표연에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }
    else
    {
        echo "값에 영문과 한글 .(점) 그리고 띄어쓰기외의 문자가 있는지 확인 요망";
    } */
?>
<?php 
    //077 정규표현식 숫자 검사
    /* $pattern = '/^[0-9]+$/';
    $str = 123456;
    if(preg_match($pattern, $str, $matches))
    {
        echo "값 {$str}은 정규식 표연에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }
    else
    {
        echo "값에 숫자 이외의 값이 있는지 확인 요망";
    } */
?>
<?php 
    //078 정규표현식으로 휴대전화번호 유효성 검사하기
    /* $pattern = '/^(010|011|016|017|019)-[^0][0-9]{3,4}-[0-9]{4}/';
    $str = '010-8670-0247';

    if(preg_match($pattern, $str, $matches))
    {
        echo "값 {$str}은 정규식 표연에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }
    else
    {
        echo "값에 숫자 이외의 값이 있는지 확인 요망";
    } */
    
?>
<?php 
    //079 정규표현식 이메일 유효성 검사하기
    $pattern 
    = '/^[a-zA-Z]{1}[a-zA-Z0-9.\-_]+@[a-z0-9]{1}[a-z0-9\-]+[a-z0-9]{1}\.(([a-z]{1}[a-z.]+[a-z]{1})|([a-z]+))$/';
    $str = 'mybookfoweb@gmail.com';
    
    if(preg_match($pattern, $str, $matches))
    {
        echo "값 {$str}은 정규식 표현에 적합한 값입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    }
    else
    {
        echo "이메일 주소 유효성에 맞지 않습니다.";
    }
?>

















