	<?php
	require_once 'conexao.php';
	$ret = $pdo->query("SELECT  FAL_CURSO, FAL_USER_MATRICULA, FAL_DATA_INICIAL, FAL_DURACAO FROM  PS_FALTAS_ALUNOS ");
	$result = $ret->fetchAll();
	//echo "<pre>";
	//var_dump($result);
	//echo "</pre>";
	 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

		<?php include 'estilos.php' ?>

	</head>
	<body>
		<?php include 'menulateral.php'; ?>
		<div class="formulario">
			<h2>Justificativa de Falta Aluno</h2>
			<form action="cadastrar_requerimento_aluno.php" method="POST" >
				<label for="matricula">Nº da Matrícula:</label>
					<input type="text" name="matricula" required/>
				<label for="curso">Curso:</label>
					<input type="text" name="curso"/>

				<label for="dataini">Data Inicial Atestado:</label><br>
					<input type="date" name="dataini"/>
				<br><label for="datafin">Numero de dias:</label><br>
					<input type="number" name="numero"/>
				<br><label for="file">Atestado:</label><br>
					<input type="file" name="arquivo">
				<input type="submit" value="Enviar" id="btnSalvar" name="submit"/>
			</form>
		</div>

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
					for ($i=0; $i < count($result) ; $i++) {
						echo "<tr>";
						echo "<td>". NULL."</td>";

						echo "<td>". $result[$i]["FAL_CURSO"]."</td>";
						echo "<td>". $result[$i]["FAL_ALN_MATRICULA"]."</td>";
						echo "<td>". $result[$i]["FAL_DATA_INICIAL"]."</td>";
						echo "<td>". $result[$i]["FAL_DURACAO"]."</td>";
						echo "</tr>";

					}
				?>


			</tbody>
		</table>
		<?php include 'php/footer.php' ?>
	</body>
</html>
