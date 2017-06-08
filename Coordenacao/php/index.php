<!DOCTYPE html>
    <html>
    <head>
            <title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
            <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

            <?php include 'estilos.php'; ?>

        </head>
        <body>
            <?php include 'menulateral.php'; ?>
        <div class="formulario">
        <form action="" method="post">
        <h2>Login:</h2>
                <label>Matrícula:</label>
                <input type="text" name="matricula"><br>
                <label>Senha:</label><br>
                <input type="radio" name="radio" value="professor">Professor<br>
                <input type="radio" name="radio" value="aluno">Aluno<br>
                <input type="radio" name="radio" value="servidor">Servidor<br>
                <input type="submit" name="enviar" value="Login">
            </form>
        </div>



    </body>
</html>