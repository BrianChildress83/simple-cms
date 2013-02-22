<?php

try{
	$pdo = new PDO('mysql:host=localhost;dbname=php_cmsNEW', 'cmsNEW', 'abc');
} catch (PDOException $e) {
	exit('Database error.');
}

?>