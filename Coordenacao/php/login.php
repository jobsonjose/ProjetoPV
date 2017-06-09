<?php
session_start();
include "conexao.php";

$matricula=$_POST['matricula'];
$tipo=$_POST['radio'];
	var_dump($matricula);
	var_dump($tipo);

	$ret = $pdo->query("SELECT USER_MATRICULA FROM ps_user WHERE USER_MATRICULA = '$matricula'");
	if($tipo == "PROFESSOR"){
		echo "sei lá";
	}else{
		echo "errooou";
	}

			
?>