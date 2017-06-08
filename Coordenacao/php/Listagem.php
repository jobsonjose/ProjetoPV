    <?php
        require_once 'conexao.php';
        $ret = $pdo->query("SELECT FAP_USER_MATRICULA, FAP_DATA, FAP_HORARIO, FAP_DIS FROM PS_FALTAS_PROFESSOR ");
        $result = $ret->fetchAll();
        //echo "<pre>";
        //echo var_dump($result);
        //echo "</pre>";
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


    </body>
    </html>