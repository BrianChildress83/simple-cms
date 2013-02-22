<?php

include_once('inc/connection.php');
include_once('inc/article.php');

$article = new Article;

?>

<html>
<head>
	<title>CMS</title>
	<link rel="stylesheet" href="assets/style.css" />
</head>
	<body>

		<div class="container">
			<a href="index.php" id="logo">CMS</a>

			<ol>
				<li><a href="article.pgp?id-1">Article Title</a> - <small>posted 10th Jan</small></li>
			</ol>
		</div>

	</body>
	
</html>
