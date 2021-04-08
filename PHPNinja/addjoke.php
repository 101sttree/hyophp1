<?php
if (isset($_POST['joketext']))
{
    try
    {
        $pdo = new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8','root','jhs1741jhs@@');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e)
    {
        $title = '오류가 발생했습니다.';
        $output = '데이터베이스에 접속할 수 없습니다.'.$e;
        $e -> getMessage().',위치:'.
        $e -> getFile().':'.$e->getLine();
    }


}
else
{
    $title = '유머 글 등록';
    ob_start();
    include __DIR__.'/addjoke.html.php';
    $output = ob_get_clean();

}
include __DIR__.'/layout.html.php';