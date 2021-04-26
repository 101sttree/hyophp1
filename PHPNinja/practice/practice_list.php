


<?php
try {
    $pdo = new PDO('mysql:host=localhost; dbname=test1','root','jhs1741jhs@@');
    $pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT `content`,`id` FROM `board`';
    $title = '글 목록';

    $board =  $pdo ->query($sql);

    ob_start();
    include __DIR__.'/content.html.php';
    $output = ob_get_clean();

}catch (PDOException $e){
    $title = '오류가 발생하였습니다.';
    $output = 'DB접속에 실패하였습니다.'.$e->getMessage().
    '<br>위치 : '.$e->getFile().'\line : '.$e->getLine();

}
include __DIR__.'/practice_layout.php';



