<?php 
    session_start();
    require 'conexao.php';
        if(isset($_SESSION['edite_user'])){
            $id = $_SESSION['edite_user'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $matricula = $_POST['matricula'];

        $stmt = $pdo->prepare("UPDATE PS_USER SET USER_NOME = ?, USER_MATRICULA = ? WHERE USER_ID = ?");
        $stmt = $pdo->exec("UPDATE PS_USER SET USER_NOME = '$nome', USER_MATRICULA = '$matricula' where USER_ID = '$id'");
        
        if(count($stmt) > 0){
            unset($_SESSION['edite_user']);
             header("location: Listagem.php");

        }else{
             header("location: home.php");
        }

    }

    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM PS_USER where USER_ID = ?");
    $stmt = $pdo->query("SELECT * FROM PS_USER where USER_ID = '$id'");
    // var_dump($stmt);
     $res = $stmt->fetchAll();
    //   var_dump($res);
    if(count($res) > 0){

    include 'estilos.php';
    include 'menulateral.php';
    $_SESSION['edite_user'] = $id;
?>
    <meta charset="utf-8">
    <div class="formulario">
        <form action="#" method="POST">
                <legend>Edição de Usuario</legend>
                <label> Nome: 
                    <input type="text" name="nome" value="<?= $res[0][USER_NOME]?>" placeholder="editar Nome">
                </label>
                <label>Email:
                    <input type="text" name="email" value="<?= $res[0][USER_EMAIL]?>" disabled>
                </label>
                <label>Matricula:
                    <input type="text" name="matricula" value="<?= $res[0][USER_MATRICULA]?>">
                </label>
                <label>Senha:
                    <input type="text" name="senha" value="<?= $res[0][USER_SENHA]?>" disabled>
                </label>
                <label>Login:
                    <input type="text" name="login" value="<?= $res[0][USER_LOGIN]?>" disabled>
                </label>
                <input type="submit" name="Alterar" value="Alterar">
        </form>
    </div>

<?php 
    }
?>
 

