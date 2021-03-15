<?php 
    $a = array
    (
        '하나',
        '둘',
        '셋'
    );  
    
    for ($i = 0, $count = count($a); $i < $count; $i++) 
    {
        print "메뉴 번호 $i : $a[$i] <br>\n";    
    }
?>
<?php
    $c = array("even","odd");
    $b = array
    (
        '하나',
        '둘',
        '셋'
    );  
    print '<br>';
    print '<br>';
    print '<table>';
    
    for ($i = 0, $count = count($b); $i < $count; $i++) 
    {
        print '<tr class="' .$c[$i % 2].'">';
        print "<td>원소 $i</td><td>$b[$i]</td></tr>\n";
    }
    
    print '</table>';
    print '<br>';
    print 3 % 2;
    
?>
<?php
    
    $k[0] = 'A';
    $k[1] = 'B';
    $k[3] = 'D';
    $k[2] = 'C';
    
   /*  foreach ($k as $k)
    {
        print $k;
    } */
    print '<br>';
    
    for ($i = 0, $count = count($k); $i < $count; $i++) 
    {
        print $k[$i];
    }
?>

<?php
    print '<br>';
    print '<br>';
    $b = array
    (
        '하나',
        '둘',
        '셋'
    ); 
    if (in_array("하나", $b)) 
    {
        print "안녕하세요";
        print array_key_exists(1, $b);
        
    }
    
?>
<?php
    print '<br>';
    print '<br>';
    $b2 = array
    (
        '하나' => 1,
        '둘' => 2,
        '셋' => 3,
        '합계' => 0
    );
    $b2['하나']++;
    $b2['둘'] = 12;
    $b2['셋'] =4;
    $b2['합계'] = $b2['하나'] + $b2['둘'];  
    print $b2['하나'].", "; 
    print $b2['둘'].", ";  
    print $b2['셋'].", ";  
    print $b2['합계'].", "; 
    
?>
<?php
    print '<br>';
    print '<br>';
    $b2 = array
    (
        '하나 그리고 하나' => 1,
        '둘' => 2,
        '셋' => 3,
        '합계' => 0
    );
    print "하나의 값은 : {$b2['하나 그리고 하나']}";

?>
<?php
    print '<br>';
    print '<br>';
    $b2 = array
    (
        '하나 그리고 하나' => 1,
        '둘' => 2,
        '셋' => 3,
        '합계' => 0
    );
    unset($b2['하나 그리고 하나']);
    print "하나의 값은 : {$b2['하나 그리고 하나']}";
?>

<?php
    print '<br>';
    print '<br>';
    $b2 = array
    (
        '하나 그리고 하나' => 1,
        '둘' => 2,
        '셋' => 3,
        '합계' => 0
    );
    $implode = implode(', ', $b2);
    print $implode;
    print '<br>';
    print '<tr><td>'.implode('</td><td>', $b2).'</td></tr>';
?>
<?php
    print '<br>';
    print '<br>';
    $b2 = "안,녕,하,세,요";
    $exploed = explode(",", $b2);
    print '<br>';
    print '안녕하세요 의 첫번째 글자는 '.$exploed[0].' 입니다';
    
?>





















