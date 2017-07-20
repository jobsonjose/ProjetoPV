<!DOCTYPE html>
<html>
	<head>
		<title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<?php include 'estilos.php';
		?>
		
	</head>
	<body>
		<?php include 'menulateral.php';
		?>

		<div class="formulario">
			<?php
				if (isset($_SESSION['cadastro'])) {
				?>
				<div class="alert alert-success" id="center">Cadastro realizado com <strong>Sucesso</strong></div>
			<?php
				unset($_SESSION['cadastro']);
				}
				if (isset($_SESSION['erro'])) {

			?>
				<div class="alert alert-danger" id="center">Erro ao tentar Cadastar, <strong>Por favor Tente mais tarde</strong></div>
			<?php
				unset($_SESSION['erro']);
				}
			?>
			<h2>Cadastro de Usuário</h2>
			<form action="user_action.php" method="POST" >
				<label for="nome">Nome</label>
					<input type="text" name="nome">
				<label for="nome">Login</label>
					<input type="text" name="login">
				<label for="aluno">Matrícula</label>
					<input type="text" name="matricula">
				<label for="date">Email:</label>
					<input type="email" name="email">
				<label for="senha">Senha</label>
					<input type="password" name="senha">
				<select name="tipo" id="tipos" onclick="numeroSiape()">
					<option disabled selected> -- </option>
					<option value="professor">Professor</option>
					<option value="servidor">Servidor</option>
					<option value="aluno">Aluno</option>
				</select>

				<div id="professor" style="display: none">
					<input required type="number" placeholder="Digite seu Siape">
				</div>
				<div id="aluno" style="display: none">
					<input required type="number" placeholder="Digit seu cpf">
				</div>

				<input type="submit" value="Enviar"/>
			</form>
		</div>
		<?php include 'footer.php'
		?>

		<script>
			function numeroSiape(){
				var i =document.getElementById("tipos");

				if (i.value == 'professor' || i.value == 'servidor') {
					document.getElementById('professor').style.display = 'block';
					document.getElementById('aluno').style.display = 'none';
				}else{
					document.getElementById('aluno').style.display = 'block';
					document.getElementById('professor').style.display = 'none';
				}
			}
		</script>
	</body>
</html>