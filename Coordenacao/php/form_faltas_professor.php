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
			<h2>Registro de Falta de Professor</h2>
			<form action="cadastrar_professor.php" method="post" >
				<label for="disci">Disciplina</label>
					<input type="text" name="disciplina"/>
				<label for="aluno">Matrícula do Aluno(a)</label>
					<input type="text" name="matricula"/>
				<label for="date">Data da Aula:</label><br>
					<input type="date" name="dataaula"/>
				<br><label for="hora">Horario :<br></label>
					<input type="time" name="horario"/><br>
				<input type="submit" value="Enviar" name="submit"/>
			</form>
		</div>
	<?php include 'php/footer.php'
	?>

	</body>
</html>