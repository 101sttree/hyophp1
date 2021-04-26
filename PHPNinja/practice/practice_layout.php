<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>
    </head>
    <body>
        <header>
            <h1>게시판</h1>
        </header>
        <nav>
            <ul>
                <li><a href="practice_index.php">Home</a></li>
                <li><a href="practice_list.php">글 목록</a></li>
                <li><a href="practice_insert.php">글 등록</a></li>
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>
            &copy; IJDB 2017
        </footer>

    </body>
</html>
