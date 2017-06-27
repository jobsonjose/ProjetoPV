<?php 
session_start();
require_once 'conexao.php';

$id = $_GET['id'];
var_dump($id);

$del_stmt = $pdo->prepare("DELETE FROM ps_user WHERE USER_ID= ?"); 
$del_stmt->execute(array($id));
header("location:Listagem.php");


?>