<?php
    $title = '인터넷 유머 세상';
    ob_start();
    include __DIR__.'/home.html.php';
    $output = ob_get_clean();
    include __DIR__.'/layout.html.php';
?>