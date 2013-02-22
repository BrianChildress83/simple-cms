<?php

$config['db'] = array (
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'dbname' => 'php_cmsNEW'
);

try {
	$pdo = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['dbname'], $config['db']['username'], $config['password']);
 } catch (PDOException $e) {
 	exit('Database error.');
 }

?>