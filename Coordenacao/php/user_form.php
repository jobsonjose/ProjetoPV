		<?php
		require_once 'conexao.php';
		$ret = $pdo->query("SELECT PRO_NOME, PRO_SIAPE, PRO_EMAIL, SER_NOME, SER_SIAPE, SER_EMAIL, ALN_NOME, ALN_MATRICULA, ALN_EMAIL FROM PS_PROFESSOR, PS_SERVIDOR, PS_ALUNO");
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

		<?php include 'estilos.php'; ?>

	</head>
	<body>
		<?php include 'menulateral.php'; ?>
		<div class="formulario">
			<h2>Cadastro de Usuário</h2>
			<form action="user_action.php" method="post" >
				<label for="nome">Nome</label>
					<input type="text" name="nome"/>
				<label for="aluno">Matrícula</label>
					<input type="text" name="matricula"/>
				<label for="date">Email:</label><br>
					<input type="email" name="email"/>
				<select name="tipo" id="selct-tipo">
					<option value="professor">Professor</option>
					<option value="servidor">Servidor</option>
					<option value="aluno">Aluno</option>
				</select>




				<input type="submit" value="Enviar" id="btnSalvar" name="submit"/>
			</form>
		</div>

		<table id="tblListar">
			<thead>
				<tr>
					<th colspan="5">user</th>
				</tr>
				<tr>
					 <th>Nome </th> <th>Matricula</th> <th>Email</th>
				</tr>

					<?php
						for ($i=0; $i < count($result) ; $i++) {
							echo "<tr>";
							echo "<td>". $result[$i]["PRO_NOME"]."</td>";
							echo "<td>". $result[$i]["PRO_SIAPE"]."</td>";
							echo "<td>". $result[$i]["PRO_EMAIL"]."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>". $result[$i]["SER_NOME"]."</td>";
							echo "<td>". $result[$i]["SER_SIAPE"]."</td>";
							echo "<td>". $result[$i]["SER_EMAIL"]."</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>". $result[$i]["ALN_NOME"]."</td>";
							echo "<td>". $result[$i]["ALN_MATRICULA"]."</td>";
							echo "<td>". $result[$i]["ALN_EMAIL"]."</td>";
							echo "</tr>";



						}
					 ?>

		<?php include 'footer.php' ?>
	</body>
</html>
