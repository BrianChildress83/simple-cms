<?php

class Article {
	public function fetch_all(){
		global $pdo;

		$pdo->prepare("SELECT * FROM articles");
		
	}


}

?>