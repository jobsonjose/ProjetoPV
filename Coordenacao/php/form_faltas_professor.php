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
	if (isset($_SESSION['cadastro'])) {
 	?>
 	<div class="alert alert-success" id="center">Requerimento Realizado com <strong>Sucesso</strong> <button id="confirm" class="btn btn-lok">X</button></div>
<?php
	session_destroy();
	}
	if (isset($_SESSION['erro'])) {

 ?>
	<div class="alert alert-danger" id="center"><?= $_SESSION['erro']; ?>,<strong>Por favor Tente novamente</strong> <button id="confirm" class="btn btn-lok">X</button></div>
<?php
	session_destroy();
	}
 ?>
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
	<script>
	$("#confirm").click(function() {
		$("#center").hide();
	});
	</script>
	</body>
</html>