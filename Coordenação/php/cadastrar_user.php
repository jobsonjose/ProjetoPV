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
			<form action="cadastrar_user.php" method="post" >
				<label for="nome">Nome</label>
					<input type="text" name="nome"/> 
				<label for="aluno">Matrícula</label>
					<input type="text" name"matricula"/>
				<label for="date">Email:</label><br>
					<input type="text" name="email"/> 
				<label for="professor">Professor </label>
					<input type="checkbox" name"professor"/>

					<label for="aluno">Aluno </label>
					<input type="checkbox" name"aluno"/>

					<label for="servidor">Servidor </label>
					<input type="checkbox" name"servidor"/>




				<input type="submit" value="Enviar" id="btnSalvar" name="submit"/> 
			</form>
		</div>
		
		<table id="tblListar">
			<thead>
				<tr>
					<th colspan="5">user</th>
				</tr>
				<tr> 
					 <th>Nome </th> <th>Disciplina</th> <th>Email</th>
		<?php include 'footer.php' ?>
	</body>
</html>
