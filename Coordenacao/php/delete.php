<?php
session_start();
require_once 'conexao.php';

$id = $_GET['id'];

$del_stmt = $pdo->prepare("DELETE FROM ps_user WHERE USER_ID= ?");
$del_stmt = $pdo->exec("DELETE FROM PS_USER WHERE USER_ID = '$id'");

header("location: Listagem.php");


?>