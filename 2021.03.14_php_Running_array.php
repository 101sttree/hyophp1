<?php 
    
    $vegetables = 
    array
    (
        'corn'   => '노랑',
        1        => '빨강',
        'carrot' => '주황'
    );
    
?>
<?php 
    
    $vegetables = 
    [
        'corn'   => '노랑',
        1        => '빨강',
        'carrot' => '주황'
    ];
    
?>
<?php 
    
    $vegetables['corn'] = '노랑';
    $dinner[0] = '레몬 치킨';
    
?>

<?php 
    
    $dinner = array('스위트콘','레몬 치킨','망태버섯');
    print "$dinner[0] 그리고  $dinner[1] 주세요";
    
?>
<?php 
    echo "<br>";
    $vegetables = 
    [
        'corn'   => '노랑',
        1        => '빨강',
        'carrot' => '주황'
    ];
    $count = count($vegetables);
    print "총 원소 개수 : $count";
?>

<?php 
    echo "<br>";
    $vegetables = 
    [
        'corn'   => '노랑',
        1        => '빨강',
        'carrot' => '주황'
    ];
    foreach ($vegetables as $key => $value)
    {
        print   "<tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>\n";
    }
    
?>
<?php 
    echo "<br>";
    $vegetables = 
    [
        'one'   => 1,
        'two'   => 2,
        'three' => 3
    ];
    foreach ($vegetables as $key => $value)
    {
        $vegetables[$key] = $vegetables[$key] * 2;
    }
    foreach ($vegetables as $key => $value)
    {
        printf("%s메뉴의 변경된 가격은  %d입니다 \n",$key,$value);
    }
    
?>






















