<?php
try {
    $pdo = new PDO('mysql:host=localhost; dbname=test1; charset=utf8;',
    'root','jhs1741jhs@@');
    $pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = 'DELETE FROM `board`
            WHERE `id` = :id';
    $stmt = $pdo->prepare($sql);

    $stmt ->bindValue(':id',$_POST['id']);
    $stmt ->execute();

    header('location:practice_list.php');
}catch (PDOException $e){
    $output = 'DB 접속에 실패하였습니다.'.$e->getMessage().
    '<br>위치 : '.$e->getFile().'\line : '.$e->getLine();
    $title = '오류 페이지';
}
include __DIR__.'/practice_layout.php';