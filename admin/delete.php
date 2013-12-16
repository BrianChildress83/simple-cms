<?php

session_start();

include_once('../inc/connection.php');
include_once('../inc/article.php');

$article = new Article;

if (isset($_SESSION['logged_in'])) {

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = $pdo->prepare('DELETE FROM articles WHERE article_id = ?');
		$query->bindValue(1, $id);
		$query->execute();

		header('Location: delete.php');
	}
	$articles = $article->fetch_all();
?>
	<html>
<head>
	<title>CMS</title>
	<link rel="stylesheet" href="../assets/style.css" />
</head>
	<body>

		<div class="container">


			<a href="index.php" id="logo">CMS</a>
			<h4>Select an Article to delete:</h4>
			<br /><br />

			<form action="delete.php" method="get" name="id">
				<select onchange="this.form.submit();">
					<?php foreach ($articles as $article) { ?>
						<option value="<?php echo $article['article_id']; ?>">
							<?php echo $article['article_title']; ?>
						</option>
					<?php } ?>
				</select>
			</form>

		</div>

	</body>
	
</html>

<?php

} else {
	header('location: index.php');
}

?>