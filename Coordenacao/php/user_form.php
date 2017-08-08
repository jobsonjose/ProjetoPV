<!DOCTYPE html>
<html>
	<head>
		<title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<?php include 'estilos.php';
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
			function validar(){
				var SIAP = formuser.SIAP.value;
				var CPF = formuser.CPF.value;

				if(document.getElementById('professor').style.display == 'block'){
					if(SIAP == ''){
						formuser.CPF.value = null;
						alert("Preencha o Campo com seu SIAP!");
						document.getElementById('professor').style.display = 'block';
						formuser.SIAP.focus();						
						return false;						
					}if(SIAP.length != 7){
						alert("SIAP inválido,Tente Novamente!");
						formuser.SIAP.value = null;
						formuser.SIAP.focus();
						return false;
					}
				}else{
				if(CPF == ''){
					formuser.SIAP.value = null;
					alert('Preencha o Campo com seu CPF!');
					document.getElementById('aluno').style.display = 'block';	
					formuser.CPF.focus();
					return false;

				}if(CPF.length != 11) {
					alert("CPF inválido,Tente Novamente!");
					formuser.CPF.value = null;
					formuser.CPF.focus();
					return false;
					}
				}					
			}
		</script>
		
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
			<form action="user_action.php" name="formuser" method="POST" >
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
				<select name="tipo" id="tipos" onClick="numeroSiape()">
					<option disabled selected> -- </option>
					<option value="professor">Professor</option>
					<option value="servidor">Servidor</option>
					<option value="aluno">Aluno</option>
				</select>

				<div id="professor" style="display: none">
					<input type="number" name="SIAP" placeholder="Digite seu Siape">
				</div>
				<div id="aluno" style="display: none">
					<input type="number" name="CPF" placeholder="Digit seu CPF">
				</div>
					<input type="submit" onclick="return validar()">				
			</form>
		</div>
		<?php include 'footer.php'
		?>

	</body>
</html>