<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="jokes.css">
		<title><?=$title?></title>
	</head>
	
	<body>
		<header>
			<h1>인터넷 유머 세상</h1>
		</header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="jokes.php">유머 글 목록</a></li>
				<li><a href="addjoke.html.php">유머 글 등록</a></li>
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
