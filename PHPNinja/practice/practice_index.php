<?php
    $title = '메인화면';
    ob_start();
    include __DIR__.'/home.html.php';
    $output = ob_get_clean();
    include __DIR__.'/practice_layout.php';