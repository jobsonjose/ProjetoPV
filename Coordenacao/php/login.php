<?php
	session_start();
	include "conexao.php";

	$matricula=$_POST['matricula'];
	$tipo=$_POST['radio'];

	$ret = $pdo->query("SELECT USER_MATRICULA FROM ps_user WHERE USER_MATRICULA = '$matricula'");
		
	}			
?>