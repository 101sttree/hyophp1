<?php
    $pdo= new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8','root','jhs1741jhs@@');
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql ='SELECT `joketext` FROM `joke`';
    $result = $pdo-> query($sql);

    while($row = $result->fetch())
    {
        $jokes[] = $row['joketext'];
    }

    echo $jokes[0];
    echo '<br>';
    echo $jokes[1];
    echo '<br>';
    echo __DIR__ . '\jokes.html.php';
    ob_start();
    include __DIR__ . '/jokes.html.php';
    $output = ob_clean();
    echo $output;

?>
