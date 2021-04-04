<?php 
    try
    {
        $pdo= new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8','nonhyo','jhs1741jhs@@');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql ='SELECT `joketext` FROM `joke`';
        $result = $pdo-> query($sql);
        
        while($row = $result->fetch())
        {
            $jokes[] = $row['joketext'];
        }
    }
    catch (PDOException $e)
    {
        $output = '데이터베이스에 접속할 수 없습니다.'.$e;
        $e -> getMessage().',위치:'.
        $e -> getFile().':'.$e->getLine();    
    }
    
    //include __DIR__ . '/../templates/jokes.html.php';
    include './jokes.html.php';
    
?>
