    <?php
        include 'conexao.php';
        $ret = $pdo->query("SELECT FAP_USER_MATRICULA, FAP_DATA, FAP_HORARIO, FAP_DIS FROM PS_FALTAS_PROFESSOR ");
        $result = $ret->fetchAll();

        $rot = $pdo->query("SELECT * FROM PS_USER");
        $value = $rot->fetchAll();

        $root = $pdo->query("SELECT USER_NOME FROM PS_USER");
        $up = $root->fetchAll();
        $reet = $pdo->query("SELECT   FAL_CURSO, FAL_USER_MATRICULA, FAL_DATA_INICIAL, FAL_DURACAO FROM  PS_FALTAS_ALUNOS ");
        $resultado = $reet->fetchAll();
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

        <table id="tblListar">
            <thead>
                <tr>
                    <th colspan="5">Registro Falta Professores</th>
                </tr>
                <tr>
                      <th>Disciplina</th> <th>Matrícula do Aluno(a)</th> <th>Data da Aula</th> <th>Horario</th> <th>Matricula</th>
                </tr>
            </thead>
            <tbody id="corpo">
                <?php
                    for ($i=0; $i <count($result) ; $i++) {
                        echo "<tr>";
                        echo "<td>". $result[$i]["FAP_DIS"]."</td>";
                        echo "<td>". $result[$i]["FAP_USER_MATRICULA"]."</td>";
                        echo "<td>". $result[$i]["FAP_DATA"]."</td>";
                        echo "<td>". $result[$i]["FAP_HORARIO"]."</td>";
                        echo "<td>". Null."</td>";
                        echo "</tr>";


                    }
                ?>


            </tbody>
        </table>
        <br>
        <table id="tblListar">
                <tr>
                    <th colspan="5">Usuário</th>
                </tr>
                <tr>
                    <th>Nome</th> <th>Matricula</th> <th>Email</th>
                </tr>
                <?php
                foreach($value as $key => $value):
                    ?>
                <tr>
                    <td><?=$value["USER_NOME"]?></td>
                    <td><?=$value["USER_MATRICULA"]?></td>
                    <td><?=$value["USER_EMAIL"]?></td>
                    <td><a href="edit.php?id=$key">Editar</a></td>
                    <td><a href="delete.php?id=$key">Excluir</a></td>
                </tr>

            <?php endforeach;?>
        </table>
        <br>
                <table id="tblListar">
            <thead>
                <tr>
                    <th colspan="5">Justificar Falta Aluno </th>
                </tr>
                <tr>
                    <th>Nome</th> <th>Curso</th> <th>Matricula</th> <th>Data Inicial</th> <th>Quantidade de Dias</th>
                </tr>
            </thead>
            <tbody id="corpo">
                <?php
                    for ($i=0; $i < count($resultado) ; $i++) {
                        echo "<tr>";
                        //echo "<td>". NULL."</td>";

                        echo "<td>". $up[$i]["USER_NOME"]."</td>";
                        echo "<td>". $resultado[$i]["FAL_CURSO"]."</td>";
                        echo "<td>". $resultado[$i]["FAL_USER_MATRICULA"]."</td>";
                        echo "<td>". $resultado[$i]["FAL_DATA_INICIAL"]."</td>";
                        echo "<td>". $resultado[$i]["FAL_DURACAO"]."</td>";
                        echo "</tr>";

                    }
                ?>


            </tbody>
        </table>



    </body>
    </html>