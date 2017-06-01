		<?php  
		require_once 'conexao.php';
		$ret = $pdo->query("SELECT * FROM")
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
		<?php include 'footer.php' ?>
	</body>
</html>
