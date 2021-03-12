<?php
    
    $zip = '6250';
    $month = 2;
    $day = 6;
    $year = 2007;
    
    printf("우편번호는  %05d이고 날짜는  %02d/%02d/%d", $zip, $month,$day,$year);
    echo '<br>';
    print ucwords('park json');
    
    echo '<br>';
    
    print substr("안녕하세요 반갑습니다.",0,6);
    
    echo '<br>';
    
    $html = '<span class="{class}">유부</span>
            <span class="{class}">생선 튀김</span>';
    $my_class = "lunch";
    print str_replace('유부', $my_class, $html);
    
    echo '<br>';
    
    $a = 3.95;
    $b = 0.08;
    $ab = $a + $b;
    $aab = $a + $ab;
    
    $name = 'james';
    $domain = '@example.com';
    $email_address = $name.$domain;
    
    print '세금은 '.$ab;
    echo '<br>';
    print '총 가격은'.$aab;
    echo '<br>';
    print $email_address;
    
    echo '<br>';
    echo '<br>';
    
    //연습문제 1번
    //print '점심 메뉴는 삶은 소고기입니다.';
    //print '그는 '해물요리면 좋을텐데'라고 생각했다..';
    
    //연습문제 3번
    $ham    = 4.95;
    $ham2   = $ham * 2;
    $choco  = 1.95;
    $cola   = 0.85;
    $sum1   = $ham  + $choco + $cola;
    $sum2   = $ham2  + $choco + $cola;
    
    $tip_percent = 0.17;
    $tax_percent = 0.075;
    
    $ham_tax    = $ham      * 2 +($ham2 * $tax_percent);
    $choco_tax  = $choco    + $choco * $tax_percent;
    $cola_tax   = $cola     + $cola  * $tax_percent;
    $sum3       = $ham_tax  + $choco_tax + $cola_tax;
    
    $ham_tip    = $ham_tax      +($ham2 * $tip_percent);
    $choco_tip  = $choco_tax    + $choco * $tip_percent;
    $cola_tip   = $cola_tax     + $cola  * $tip_percent;
    $sum4       = $ham_tip  + $choco_tip + $cola_tip;
    
    $sum = $ham2 + $choco + $cola;
    $tip = $sum  * $tip_percent;
    $tax = $sum  * $tax_percent;
    
    $total = $sum + $tip + $tax; 
    
    print "음식 값 : ".$sum;
    echo '<br>';
    print "팁 : ".$tip;
    echo '<br>';
    print "부가세 : ".$tax;
    echo '<br>';
    print "총 금액 : ".$total;
    
    print <<<html
<table>
<tr>
<td>요리</td>
<td>가격</td>
<td>수량</td>
<td>세전가격</td>
<td>세후가격</td>
<td>팁포함 가격</td>
</tr>
<tr>
<td>햄버거</td>
<td>$ham</td>
<td>2</td>
<td>$ham2</td>
<td>$ham_tax</td>
<td>$ham_tip</td>
</tr>
<tr>
<td>초콜릿밀크셰이크</td>
<td>$choco</td>
<td>1</td>
<td>$choco</td>
<td>$choco_tax</td>
<td>$choco_tip</td>
</tr>
<tr>
<td>콜라</td>
<td>$cola</td>
<td>1</td>
<td>$cola</td>
<td>$cola_tax</td>
<td>$cola_tip</td>
</tr>
<tr>
<td>합계</td>
<td>$sum1</td>
<td></td>
<td>$sum2</td>
<td>$sum3</td>
<td>$sum4</td>
</tr>
<table>
html;
    echo '<br>';
    echo '<br>';
    //연습문제 4번
    $first_name = "gildong";
    $last_name = "hong";
    
    print $first_name." ".$last_name;
    echo '<br>';
    print strlen($first_name." ".$last_name);
    
    echo '<br>';
    
    $five = 1;
    print $five." ";
    $five ++;
    print $five." ";
    $five ++;
    print $five." ";
    $five ++;
    print $five." ";
    $five ++;
    print $five." ";
    
    echo '<br>';
    
    $two = 2;
    $twoSum = 2;
    print $twoSum." ";
    $twoSum *= $two;
    print $twoSum." ";
    $twoSum *= $two;
    print $twoSum." ";
    $twoSum *= $two;
    print $twoSum." ";
    $twoSum *= $two;
    print $twoSum." ";
    
?>






















