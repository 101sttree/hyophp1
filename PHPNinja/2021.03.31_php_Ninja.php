<?php 
    try 
    {
        $pdg = new PDO('mysql:host=localhost; dbname=ijdb','nonhyo','jhs1741jhs@@');
        $output = '데이터베이스 접속 성공';
    } 
    catch (PDOException $e) 
    {
        $output = '데이터베이스에 접속할 수 없습니다.'.$e;
    }
    
    include __DIR__ . '/../templates/output.html.php/';
?>