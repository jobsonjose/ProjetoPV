
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
        <?php
        session_start();
        if(isset($_SESSION['error'] )){
            ?>
        <div class="alert alert-danger" id="center">Erro ao tentar Logar, <strong>Por favor Tente mais tarde</strong></div>
        <?php
            unset($_SESSION['error']);
        }
        ?>
            <form action="login.php" method="post">
                <h2>Login</h2>
                    <label>Login ou Matrícula</label>
                    <input required type="text" name="sis"><br>
                    <label>Senha</label>
                    <input required type="password" name="senha">
                    <select name="radio">
                        <option value="">--</option>
                        <option value="Professor">Professor</opiton>
                        <option value="Aluno">Aluno</opiton>
                        <option value="Servidor">Servidor</opiton>
                    </select>
                    <input type="submit" name="enviar" value="Login">
            </form>
        </div>
    </body>
</html>