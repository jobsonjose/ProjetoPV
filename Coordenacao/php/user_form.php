		<?php
		require_once 'conexao.php';
		$ret = $pdo->query("SELECT * FROM PS_ALUNO ");
		$result = $ret->fetchAll();
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
				<tr>
					<th colspan="5">user</th>
				</tr>
				<tr>
					<th>Nome</th> <th>Matricula</th> <th>Email</th>
				</tr>
				<?php
				foreach($result as $key => $value):
					?>
				<tr>
					<td><?=$value["ALN_NOME"]?></td>
					<td><?=$value["ALN_MATRICULA"]?></td>
					<td><?=$value["ALN_EMAIL"]?></td>
					<td><a href="edit.php?id=$key">Editar</a></td>
					<td><a href="delete.php?id=$key">Excluir</a></td>
				</tr>

			<?php endforeach;?>
		</table>

		<?php include 'footer.php' ?>
	</body>
	</html>
