<?php 
/*    function page_heder() 
    {
        print '<html><head><title>저의 홈페이지에 오신것을 환영합니다.</title></head>';
        print '<body bgcolor="#ffffff">';
    }
    
    page_heder();
    print "어서오세요, $user 님";
    page_footer();
    
    function page_footer() 
    {
        print "<hr>방문해 주셔서 감사합니다.";
        print "</body></html>";
    }
    
    function page_heder2($color)
    {
        print '<html><head><title>저의 홈페이지에 오신것을 환영합니다.</title></head>';
        print '<body bgcolor="#'.$color.'">';
    }
    
    page_heder2('cc00cc');
    
    function page_heder3($color = 'cc3999')
    {
        print '<html><head><title>저의 홈페이지에 오신것을 환영합니다.</title></head>';
        print '<body bgcolor="#'.$color.'">';
    }
    
    //$a = '#000000';
    /* function page_heder4($color = $a)
    {
        print '<html><head><title>저의 홈페이지에 오신것을 환영합니다.</title></head>';
        print '<body bgcolor="#'.$color.'">';
    }
    
    function page_heder4($color, $title)
    {
        print '<html><head><title>'.$title.'에 오신것을 환영합니다.</title></head>';
        print '<body bgcolor="#'.$color.'">';
    }
    page_heder4('66cc66', '저의 홈페이지');
    
    function page_heder5($color, $title, $header = "well come")
    {
        print '<html><head><title>'.$title.'에 오신것을 환영합니다.</title></head>';
        print '<body bgcolor="#'.$color.'">';
    }
    page_heder5('66cc66', '저의 홈페이지');*/
?>
<?php 
    function countdown($top)
    {
        while($top > 0)
        {
            print "$top..";
            $top--;
        }
        print "펑!\n";
    }
    
    $counter = 5;
    countdown($counter);
    print "counter의 값  : $counter";
    
?>
<?php 
    print "<br>";
    $num = number_format(5048123);
    print $num;
?>
<?php 

    function sum($a,$b,$c)
    {
        return $a + $b + $c;
    }
    
    $SUM = sum(1,2,3);
    print $SUM;

?>
































