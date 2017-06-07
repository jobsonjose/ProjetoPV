
<?php
	require_once 'conexao.php';
            $matricula = $_POST['matricula'];
            $curso = $_POST['curso'];
            $data = $_POST['dataini'];
            $qdias = $_POST['numero'];

            $rot= $pdo->query("SELECT * FROM PS_ALUNO WHERE ALN_MATRICULA = '$matricula'");
            var_dump($rot);
            if($rot > 0){
                $ret= $pdo->exec("INSERT INTO PS_FALTAS_ALUNOS (FAL_ALN_MATRICULA, FAL_CURSO, FAL_DATA_INICIAL, FAL_DURACAO) VALUES ('$matricula', '$curso', '$data', '$qdias')");
                var_dump($ret);
              //header("Location: {$_SERVER['HTTP_REFERER']}");
            }
// redireciona para a página anterior
	//header("Location: {$_SERVER['HTTP_REFERER']}");

?>
<!DOCTYPE html>
    <html>
           <head>
                <title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
                <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

                <?php include 'estilos.php'; ?>

            </head>
            <body>
                <?php include 'menulateral.php'; ?>

                <?php
                if ($ret > 0) {
                        echo "<div  id='center' class='alert alert-success'>";
                        echo "Requerimento Cadastrado com <strong>Sucesso</strong>";
                        echo "</div>";
                    } else {
                        echo "<div  id='center' class='alert alert-danger'>";
                        echo "Matricula Incorreta. <strong>Tente Novamente </strong>";
                        echo "</div>";
                 }
                 ?>



             </body>
    </html>
