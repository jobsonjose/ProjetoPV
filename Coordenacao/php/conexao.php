<?php 
	$dbname = "portal_servidor";
	$host = "localhost";
	$user = "root";
	$pass = "123456";

	$dsn = "mysql:dbname=$dbname;port=13306;host=$host";

	$pdo= new PDO($dsn, $user);

	

 ?>