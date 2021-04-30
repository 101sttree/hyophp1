<?php
    /*function process_form(){
        print'<ul>';
        foreach ($_POST as $k => $v){
            print '<li>'.htmlentities($k).'='.htmlentities($v).'</li>';
        }
        print'</ul>';
    }

    process_form();*/
    switch ($_POST['calculate']){
        case '+' :
            echo $_POST['fnum'] . '+' . $_POST['snum'].'='.
                ($_POST['fnum'] + $_POST['snum']);
            break;
        case '-' :
            echo $_POST['fnum'].'-'.$_POST['snum'].'='.
                ($_POST['fnum']-$_POST['snum']);
            break;
        case '*' :
            echo $_POST['fnum'].'*'.$_POST['snum'].'='.
                $_POST['fnum']*$_POST['snum'];
            break;
        case '/' :
            if($_POST['snum']==0){
                echo '0으로 나눌수 없습니다.';
                break;
            }
            if($_POST['snum']!=0){
                echo $_POST['fnum'].'/'.$_POST['snum'].'='.
                    $_POST['fnum']/$_POST['snum'];
                break;
            }
    }
