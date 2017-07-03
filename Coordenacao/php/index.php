<?php
session_start();
if(isset($_SESSION['error'] )){
    ?>
<div class="alert alert-danger" id="center">Erro ao tentar Logar, <strong>Por favor Tente mais tarde</strong></div>
 <?php
 }
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <?php include 'estilos.php';
        ?>

    </head>
    <body>
        <?php include 'menulateral.php';
        ?>

        <div class="formulario">
            <form action="login.php" method="post">
            <h2>Login:</h2>
                <label>Login ou Matrícula</label>
                <input required type="text" name="matricula"><br>
                <label>Senha</label>
                <input required type="password" name="senha">
                <input required type="radio" name="radio" value="professor">Professor<br>
                <input type="radio" name="radio" value="aluno">Aluno<br>
                <input type="radio" name="radio" value="servidor">Servidor<br><br>
                <input type="submit" name="enviar" value="Login">
            </form>
        </div>
    </body>
</html>