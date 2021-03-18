<?php 
    //051 특정 시간을 타임스탬프 시간으로 표시하기
    echo "2020년 01월 01일 09시 15분 10초의 타임스탬프는?  ";
    $a = mktime(9,15,10,1,1,2020);
    echo $a;
    echo "<br>";
?>
<?php 
    //052 특정 시간에만 특정 기능이 작동하기
    $start = mktime(0,0,0,1,1,2019);
    $end = mktime(0,59,59,1,1,2019);
    
    $now = time();
    
    if($now >= $start && $now <= $end)
    {
        echo "현재 이벤트에 참여할 수 있는 시간입니다.";
    }
    else
    {
        echo "이벤트 시작 전이거나 종료되었습니다.";
    }
    echo "<br>";
?>
<?php 
    //053 특정 날짜가 있는 주의 월요일 날짜 구하기
    $y = 2019;
    $m = 4;
    $d = 4;
    
    $timestp = mktime(0, 0, 0, $m, $d, $y);
    $dow = date('w', $timestp);
    $sood = 60 * 60 * 24;
    
    switch ($dow)
    {
        case 1: //월요일
            $md = $timestp;
            $fd = $timestp + ($sood * 4);
        case 2: //화요일
            $md = $timestp - ($sood * 1);
            $fd = $timestp + ($sood * 3);
        case 3: //수요일
            $md = $timestp - ($sood * 2);
            $fd = $timestp + ($sood * 2);
        case 4: //목요일
            $md = $timestp - ($sood * 3);
            $fd = $timestp + ($sood * 1);
        case 5: //금요일
            $md = $timestp - ($sood * 4);
            $fd = $timestp;
    }
    if(isset($md) && isset($fd))
    {
        echo "{$y}년 {$m}월 {$d}일이 있는 주의 월요일과 금요일의 날짜 ";
        echo "<br>";
        echo "월요일 : ".date('Y-m-d',$md);
        echo "<br>";
        echo "금요일 : ".date('Y-m-d',$fd);
    }
    else
    {
        echo "월요일 부터 금요일의 날짜를 입력하세요";
    }
    echo "<br>";
?>
<?php 
    //054 현재 시간 정보를 배열로 보기
    $a = getdate();
    echo "현재  년도 : ".$a['year'];        echo "<br>";
    echo "현재  월: ".$a['mon'];           echo "<br>";
    echo "현재  일: ".$a['mday'];          echo "<br>";
    echo "현재  시: ".$a['hours'];         echo "<br>";
    echo "현재  분: ".$a['minutes'];       echo "<br>";
    echo "현재  초: ".$a['seconds'];       echo "<br>";
    echo "현재  요일 숫자: ".$a['wday'];      echo "<br>";
    echo "현재  요일 문자: ".$a['weekday'];   echo "<br>";
    echo "현재  월 문자 :".$a['month'];       echo "<br>";
    echo "현재  시간 타임스탬프 : ".$a[0];       echo "<br>";
    echo "현재  일차 : ".$a['yday'];         echo "<br>";
    
?>
<?php 
    //055 날짜값이 유효한지 확인하기
    $a = checkdate(2, 30, 2021);
    if ($a) 
    {
        echo "유효한 날짜입니다.";
    }
    else
    {
        echo "유효한 날짜가 아닙니다.";
    }
    
?>