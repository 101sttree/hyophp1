<?php
    try
    {
        $pdo= new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8','root','jhs1741jhs@@');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql ='SELECT `joketext` FROM `joke`';
        $result = $pdo-> query($sql);
        
        while($row = $result->fetch())
        {
            $jokes[] = $row['joketext'];
        }
        $title = '유머 글 목록';

        ob_start();
        include __DIR__ . '\jokes.html.php';
        $output = ob_get_clean();


    }
    catch (PDOException $e)
    {
        $title = '오류가 발생했습니다.';
        $output = '데이터베이스에 접속할 수 없습니다.'.$e;
        $e -> getMessage().',위치:'.
        $e -> getFile().':'.$e->getLine();    
    }
    //include __DIR__ . '/../templates/layout.html.php';
    include __DIR__ . '/layout.html.php';


    
    
?>
