<?php 
    if($loggend_in)
    {
        print "환영합니다 정회원님";
    }elseif($new_messages)
    {
        print "방문자님 새로운 메세지가 있습니다.";
    }elseif($emergency)
    {
        print "방문자님, 새로운 메세지는 없습니다만, 긴급 상황입니다.";
    }else
    {
        print "누구신지는 모르겠으나, 새로운 메세지도 없고, 긴급상황도 아닙니다.";
    }
    
    if($new_messages == 10)
    {
        print "새로운 메세지가 10개 있습니다.";
    }
    if($new_messages == $max_messages)
    {
        print "메세지함이 가득 찼습니다.";
    }
    if($new_messages == "조개찜")
    {
        print "맛있겠다!해산물 좋아";
    }
    
    if(abs($a1 - $a2) < 0.00001)
    {
        print "$a1과 $a2는 같음" ;
    } else
    {
        print "$a1과 $a2는 다름" ;
    }
    print "<br>";
    print "<br>";
    if("54321" > "5678")
    {
        print "문자열 54321은 문자열 5678보다 크다.";
    }else
    {
        print "문자열 54321은 문자열 5678보다 크지 않다.";
    }
    
    print "<br>";
    print "<br>";
    $x = strcmp("54321","5678");
    if($x > 0)
    {
        print "문자열 54321은 문자열 5678보다 크다.";
    }else
    {
        print "문자열 54321은 문자열 5678보다 작다.";
    }
    
    $a = 1 <=> 2;
    
    print $a;
    
    $b = "j" <=> "c";
    
    print $b;
    
    $b = "a" <=> "a";
    
    print $b;
    
    if(!1 > 0)
    {
        echo "1은 0보다 큽니다.";
    }
    else
    {
        echo "1은 0보다 작습니다.";
    }
    
    print "<br>";
    print "<br>";
    
    $i = 1;
    print '<select name="people">';
    while ($i <= 10) 
    {
        print "<option>$i</option>\n";
        $i++;
    }
    print '</select>';
    
    for ($i = 0; $i < $index; $i++) 
    {
        
    }
    print "<br>";
    print "<br>";
    print '<select name="doughnuts">';
    for ($min = 1, $max = 10; $min < 50; $min += 10, $max += 10)
    {
        print "<option>$min - $max</option>\n";
    }
    print '</select>';
    
?>






















