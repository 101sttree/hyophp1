<?php 
    
    $a = 
    [
        'Sweet',
        'Lemon',
        'Braised'
    ];
    $b =
    [
        'breakfast' => 'Walnut',
        'lunch' => 'Cashew',
        'sanck' => 'Dried',
        'dinner' => 'Eggplant',
    ];
    
    /* foreach ($a as $key => $value)
    {
        echo "\$a : $key $value <br>";
    }
    foreach ($b as $key => $value)
    {
        echo "\$b : $key $value <br>";
    } */
    
    sort($a);
    sort($b);
    echo "<br>";
    
    /* foreach ($a as $key => $value)
    {
        echo "\$a : $key $value <br>";
    }
    foreach ($b as $key => $value)
    {
        echo "\$b : $key $value <br>";
    } */
    echo "<br>";
?>
<?php 
    
    $b =
    [
        'breakfast' => 'Walnut',
        'lunch' => 'Cashew',
        'sanck' => 'Dried',
        'dinner' => 'Eggplant',
    ];
    
    /* foreach ($b as $key => $value)
    {
        echo "\$b : $key $value <br>";
    }
    
    asort($b);
    echo "<br>";
    
    foreach ($b as $key => $value)
    {
        echo "\$b : $key $value <br>";
    } */
    echo "<br>";
?>
<?php 
    
    $b =
    [
        'breakfast' => 'Walnut',
        'lunch' => 'Cashew',
        'sanck' => 'Dried',
        'dinner' => 'Eggplant',
    ];
    
   /*  foreach ($b as $key => $value)
    {
        echo "\$b : 키 : $key 값 : $value <br>";
    }
    
    ksort($b);
    echo "<br>";
    
    foreach ($b as $key => $value)
    {
        echo "\$b : 키 : $key 값 : $value <br>";
    } */
    echo "<br>";
?>
<?php 
    
    $b =
    [
        'breakfast' => 'Walnut',
        'lunch' => 'Cashew',
        'sanck' => 'Dried',
        'dinner' => 'Eggplant',
    ];
    
   /*  foreach ($b as $key => $value)
    {
        echo "\$b : 키 : $key 값 : $value <br>";
    }
    
    krsort($b);
    echo "<br>";
    
    foreach ($b as $key => $value)
    {
        echo "\$b : 키 : $key 값 : $value <br>";
    } */
?>
<?php 
    
    $b =
    [
        'breakfast' => ['호두 번','커피'],
        'lunch' => ['캐슈너트','양송이버섯'],
        'sanck' => ['말린 오디','참깨 게살 무침']
    ];
    
    $c = 
    [
        ['호두 번','커피'],
        ['캐슈너트','양송이버섯'],
        ['말린 오디','참깨 게살 무침']
    ];
    echo $b['breakfast'][0];
    echo "<br>";
    echo $c[0][1];
    
    
    echo "<br>";
?>
<?php 
    
    $b =
    [
        'breakfast' => ['호두 번','커피'],
        'lunch' => ['캐슈너트','양송이버섯'],
        'sanck' => ['말린 오디','참깨 게살 무침']
    ];

    foreach ($b as $k => $v)
    {
        foreach ($v as $k2 => $v2)
        {
            echo "키 :$k 값 배열의 키 :$k2 값 배열의 값 : $v2";
            echo "<br>";
        }
    }
    
    
    echo "<br>";
?>
<?php 
    
    $c =
    [
        ['호두 번','커피'],
        ['캐슈너트','양송이버섯'],
        ['말린 오디','참깨 게살 무침']
    ];

    for ($i = 0; $i < count($c); $i++) 
    {
        for ($x = 0; $x < count($c[$i]); $x++) 
        {
            echo "Element [$i][$x]은".$c[$i][$x]."입니다";
            echo "<br>";
        }
    }
    
    echo "<br>";
?>