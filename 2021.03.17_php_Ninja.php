<?php 
   /* for ($i = 0; $i <= 10; $i+=2) 
   {
       $roll = rand(1,6);
       echo '<p>주사위를 굴려서 나온 숫자 : '.$roll.'</p>';
       if($roll == 6)
       {
           echo '이겼다!';
           echo '<br>';
       }
       else
       {
           echo '아쉽지만 \'꽝\'이네요 다음기회를 노려보세요';
           echo '<br>';
       }
   } */
?>
<?php 
    /* $count = 1;
    while ($count <= 10) 
    {
        echo $count.", ";
        $count++;
    } */
?>
<?php 
    /* $count = 0;
    while ($count != 6) 
    {
        $count = rand(1,6);
        echo '<p>주사위를 굴려서 나온 숫자 : '.$count.'</p>';
        
        if($count == 6)
        {
            echo '이겼다!';
            echo '<br>';
        }
        else
        {
            echo '아쉽지만 \'꽝\'이네요 다음기회를 노려보세요';
            echo '<br>';
        }
    }
    echo '<br>';
    echo '<br>';
    echo '=============================='; */
?>
<?php 
    /* do
    {
        $count = rand(1,6);
        echo '<p>주사위를 굴려서 나온 숫자 : '.$count.'</p>';
        
        if($count == 6)
        {
            echo '이겼다!';
            echo '<br>';
        }
        else
        {
            echo '아쉽지만 \'꽝\'이네요 다음기회를 노려보세요';
            echo '<br>';
        }
    }
    while ($count != 6)  */
?>
<?php 
    $a = ['a',1,'3'];
    echo $a[0];
    echo $a[1];
    echo $a[2];
    echo '<br>';
    
    $a[0] = "A";
    $a[1] = 2;
    $a[2] = '4';
    $a[3] = "안녕하세요";
    echo $a[0];
    echo $a[1];
    echo $a[2];
    echo $a[3];
    
?>
<?php 
/*    
    $roll = rand(1,6);
    if($roll == 1)
    {
        $korean = "하나";
    }
    else if($roll == 2)
    {
        $korean = "둘";
    }
    else if($roll == 3)
    {
        $korean = "셋";
    }
    else if($roll == 4)
    {
        $korean = "넷";
    }
    else if($roll == 5)
    {
        $korean = "다섯";
    }
    else if($roll == 6)
    {
        $korean = "여섯";
    }
    
    echo '<p>주사위를 굴려서 나온 숫자 : '.$korean.'</p>';
    if($count == 6)
    {
        echo '이겼다!';
        echo '<br>';
    }
    else
    {
        echo '아쉽지만 \'꽝\'이네요 다음기회를 노려보세요';
        echo '<br>';
    } */
?>
<?php 
    $korean = 
    [
        1 => '하나',
        2 => '둘',
        3 => '셋',
        4 => '넷',
        5 => '다섯',
        6 => '여섯',
    ];
    $roll = rand(1,6);
    echo '<p>주사위를 굴려서 나온 숫자 : '.$korean[$roll].'</p>';
    if($roll == 6)
    {
        echo '이겼다!';
        echo '<br>';
    }
    else
    {
        echo '아쉽지만 \'꽝\'이네요 다음기회를 노려보세요';
        echo '<br>';
    }
?>
<?php 
    $korean2 =
    [
        '하나' => 1,
        '둘' => 2,
        '셋' => 3,
        '넷' => 4
    ];
?>
























