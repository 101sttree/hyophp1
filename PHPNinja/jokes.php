<?php
    try
    {
        $pdo= new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8','root','jhs1741jhs@@');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql =' SELECT `joke`.`id`,`joketext`,`name`,`email`
                FROM `joke` INNER JOIN `author`
	            ON `authorid` = `author`.`id`';
        $jokes = $pdo->query($sql);
        $title = '유머 글 목록';

        ob_start();
        include __DIR__ . '/jokes.html.php';
        $output = ob_get_clean();

    }
    catch (PDOException $e)
    {
        $title = '오류가 발생했습니다.';
        $output = '데이터베이스 오류 :'. $e -> getMessage().',위치:'.
        $e -> getFile().':'.$e->getLine();
    }
    include __DIR__ . '/layout.html.php';

?>
