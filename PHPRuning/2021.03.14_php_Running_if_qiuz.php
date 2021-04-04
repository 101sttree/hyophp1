<?php 
    
    $age = 12;
    $show_size = 13;
    if ($age > $show_size) 
    {
        print "1번 메세지";
    }
    else if(($show_size++) && ($age > 20))
    {
        print "2번 메세지";
    }
    else
    {
        print "3번 메세지";
    }
    print "나이 : $age. 신발 치수: $show_size";
    
    echo "<br>";
    echo  (212 - 32) * 5 / 9;
    
    echo "<br>";
    $H = -50;
    
    while ($H <= 50) 
    {
        echo "화씨 : ".$H."//섭씨 : ".($H - 32) * 5 / 9;
        $H += 5;
        echo "<br>";
    }
    echo "<br>";
    echo "=================================";
    echo "<br>";
    for ($H = -50; $H <= 50; $H+=5) 
    {
        echo "화씨 : ".$H."//섭씨 : ".($H - 32) * 5 / 9;
        echo "<br>";
    }
    echo "true" + 30;
?>






















