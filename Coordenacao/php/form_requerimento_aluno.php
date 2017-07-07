<?php
	if (isset($_SESSION['cadastro'])) {
 	?>
 	<div class="alert alert-success" id="center">Requerimento Realizado com <strong>Sucesso</strong></div>
<?php
	unset($_SESSION['cadastro']);
	}
	if (isset($_SESSION['erro'])) {

 ?>
	<div class="alert alert-danger" id="center">Erro ao tentar fazer o Requerimento,<strong>Por favor Tente mais tarde</strong></div>
<?php
	unset($_SESSION['erro']);
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<?php include 'estilos.php'
		?>

	</head>
	<body>
		<?php include 'menulateral.php';
		?>

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
				<input type="submit" value="Enviar" name="submit"/>
			</form>
		</div>
	<!-- 	<?php include 'php/footer.php'
		?>
 -->
	</body>
</html>