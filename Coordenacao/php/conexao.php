<?php
	$dbname = "portal_servidor";
	$host = "localhost";
	$user = "root";
	$pass = "123456";

	$dsn = "mysql:dbname=$dbname;host=$host;port=13306";

	$pdo= new PDO($dsn, $user);
?>