<?php
    //106 namespace 와 use 사용하기
    namespace agroup;
    class user{
        function loadUse()
        {
            return '첫 번째 클래스 메소드';
        }
    }

    namespace bgroup;
    class user{
        function loadUse()
        {
            return '두 번째 클래스 메소드';
        }
    }
    use \agroup\user as au;
    use \bgroup\user as bu;

    $au = new au;
    $bu = new bu;
    echo $au ->loadUse();
    echo '<br>';
    echo $bu ->loadUse();

?>