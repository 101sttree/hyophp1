<?php
    try
    {
        $pdo = new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8','root','jhs1741jhs@@');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = 'DELETE FROM `joke`
                 WHERE `id`=:id';
        $stmt = $pdo ->prepare($sql);
        $stmt->bindValue(':id',$_POST['id']);
        $stmt->execute();

        header('location: jokes.php');
    }catch (PDOException $e)
    {
        $title = '오류가 발생했습니다.';
        $output = '데이터베이스에 접속할 수 없습니다.'.$e;
        $e -> getMessage().',위치:'.
        $e -> getFile().':'.$e->getLine();
    }


include __DIR__.'/layout.html.php';