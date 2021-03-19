<?php 
    /* if($_POST['password'] == 'secret')
    {
        include 'protected.html.php';
    }
    include 'C:\Apache24\htdocs\hyophp1\count.html.php';
    include '../count.html.php'; */
?>
<?php
    $output = '';
    for ($count = 1; $count <= 10; $count++) 
    {
        $output .= $count.' ';    
    }
    
    include __DIR__.'/../count.html.php';
?>
<?php 
    echo  getcwd();
?>