<?php
    //100 쿠키 삭제하기
//    setcookie('삭제하려는 쿠키명','쿠키값',time()-100);
?>
<?php
    /*session_start();
    //101세션 생성과 이용
    $_SESSION['userid'] = 'everdevel';

    if (isset($_SESSION['userid']))
    {
        echo "세션 생성 완료 세션 userld의 값 : {$_SESSION['userid']}";
    }
    else
    {
        echo '세션 생성 실패';
    }*/
?>
<?php
    //102 세션 삭제하기
    /*session_start();
    if (isset($_SESSION['userid']))
    {
        echo "세션이 존재합니다.";
        unset($_SESSION['userid']);
    }
    else
    {
        echo 'userid 세션이 존재하지 않습니다.';
    }
    echo '<br>';
    echo "userid 세션의 값 : {$_SESSION['userid']}";*/
?>
<?php
    /*session_start();
    //103 모든 세션 삭제
    //세션 생성
    $_SESSION['mySession1'] = 'everdevel';
    $_SESSION['mySession2'] = 'veanscent';
    $_SESSION['mySession3'] = 'tomodevel';
    //세션 확인
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    //세션 파괴
    if (session_destroy())
    {
        echo '세션 삭제 완료';
    }
    else
    {
        echo '세션 삭제 실패';
    }*/
?>
<?php
    //104 파일의 코드를 보여주는 함수 show_source()
    //show_source(__DIR__.'/helloworld.txt');
?>
<?php
    //105 클래스 사용하기
    class pen
    {
        public $color ='파란';
        function __construct($color)
        {
            echo "파라미터 color의 값 : {$color}";
            echo '<br>';
            echo "프로퍼티 color의 값 : {$this->color}";
            echo '<br>';
            $this->color = $color;
        }

        function write($contents)
        {
            echo "{$this->color}색 팬을 사용하여";
            echo "{$contents}을 쓰다.";
        }

    }
    $pen = new pen('핑크');
    $pen ->write('글');
    class operation
    {
        static function plus($num1,$num2)
        {
            $result = $num1 + $num2;
            return $result;
        }
    }
    class load1 extends operation{}
    class load2 extends operation{}


    echo operation::plus(1,2);


?>

