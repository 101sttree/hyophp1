<?php
    session_start();
    $connect = mysqli_connect('localhost', 'root', 'jhs1741jhs@@','phpboard');
    
    $id      = $_GET[name];
    $pw      = $_GET[pw];
    
    $query   = "select * from member where id = $id";
    $result  = $connect -> query($query);
    
    if (mysqli_num_rows($result)==1) 
    {
        $row = mysqli_fetch_assoc($result);
        
        if()
    }
?>