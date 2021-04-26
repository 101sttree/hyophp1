<?php
if(isset($_POST['content'])){
try {
    $pdo = new PDO('mysql:host=localhost; dbname=test1; charset=utf8;',
    'root','jhs1741jhs@@');
    $pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $title = '글 작성';

    $sql = 'INSERT INTO `board` SET
            `content` = :content,
            `writer` = :writer,
            `wdate` = now()';
    $stmt = $pdo -> prepare($sql);
    $stmt ->bindValue(':content',$_POST['content']);
    $stmt ->bindValue(':writer',$_POST['writer']);
    $stmt ->execute();

    header('Location:practice_list.php');

}catch (PDOException $e){
    $title = '오류가 발생하였습니다.';
    $output = 'DB 접속에 실패하였습니다.'.$e->getMessage().
        '<br>위치 : '.$e->getFile().'\line : '.$e->getLine();

}
}else{
    $title = '글 작성';
    ob_start();
    include __DIR__.'/insert.html.php';
    $output = ob_get_clean();
}
include __DIR__.'/practice_layout.php';

