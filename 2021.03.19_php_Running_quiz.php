<?php 
    $a =
    [
        'Suwon'     =>['do'=>'GG','person'=>1194313],
        'Changwon'  =>['do'=>'GN','person'=>1059241],
        'Goyang'    =>['do'=>'GG','person'=>990073],
        'Yongin'    =>['do'=>'GG','person'=>971327],
        'Cheongju'  =>['do'=>'CB','person'=>833276],
        'Jeonju'    =>['do'=>'JB','person'=>658172],
        'Cheonan'   =>['do'=>'CN','person'=>629062],
        'Gimhae'    =>['do'=>'GN','person'=>534124],
        'Pohang'    =>['do'=>'GB','person'=>511804],
        'jinju'     =>['do'=>'GN','person'=>349788]
    ];
    asort($a['Suwon']);
    echo "<table border='1'>";
    echo "  <tr>
                <td>도명</td>
                <td>도시명</td>
                <td>인구수</td>
            </tr>";
    $sum = 0;
    $GGsum = 0;
    $GNsum = 0;
    $GBsum = 0;
    $CBsum = 0;
    $CNsum = 0;
    $JBsum = 0;
    foreach ($a as $city => $v)
    {
        echo "  <tr>
                    <td>{$v['do']}</td>
                    <td>$city</td>
                    <td>{$v['person']}</td>
                </tr>";
        $sum += $v['person'];
        switch ($v['do'])
        {
            case 'GG':
                $GGsum += $v['person'];
                break;
            case 'GN':
                $GNsum += $v['person'];
                break;
            case 'GB':
                $GBsum += $v['person'];
                break;
            case 'CB':
                $CBsum += $v['person'];
                break;
            case 'CN':
                $CNsum += $v['person'];
                break;
            case 'JB':
                $JBsum += $v['person'];
                
        }
    }
    echo "  <tr><td>경기 인구</td><td colspan='2'>$GGsum</td></tr>";
    echo "  <tr><td>경남 인구</td><td colspan='2'>$GNsum</td></tr>";
    echo "  <tr><td>경북 인구</td><td colspan='2'>$GBsum</td></tr>";
    echo "  <tr><td>충북 인구</td><td colspan='2'>$CBsum</td></tr>";
    echo "  <tr><td>충남 인구</td><td colspan='2'>$CNsum</td></tr>";
    echo "  <tr><td>전북 인구</td><td colspan='2'>$JBsum</td></tr>";
    echo "  <tr><td>인구수 총 합</td><td colspan='2'>$sum</td></tr>";
    echo "</table>";
?>
<td colspan="2">