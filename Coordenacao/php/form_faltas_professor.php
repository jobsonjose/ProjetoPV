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
			<h2>Registro de Falta de Professor</h2>
			<form action="cadastrar_professor.php" method="post" >
				<label for="disci">Disciplina</label>
					<input type="text" name="disciplina"/> 
				<label for="aluno">Matrícula do Aluno(a)</label>
					<input type="text" name"matricula"/>
				<label for="date">Data da Aula:</label><br>
					<input type="date" name="dataaula"/> 
				<br><label for="hora">Horario :<br></label>
					<input type="time" name"horario"/><br>
				<input type="submit" value="Enviar" id="btnSalvar" name="submit"/> 
			</form>
		</div>
		
		<table id="tblListar">
			<thead>
				<tr>
					<th colspan="5">Registro Falta Professores</th>
				</tr>
				<tr> 
					  <th>Disciplina</th> <th>Matrícula do Aluno(a)</th> <th>Data da Aula</th> <th>Horario</th> <th>Matricula</th>
				</tr>
			</thead>
		    <tbody id="corpo">
				<?php
					require_once 'conexao.php';
					$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);

					$select = $conexao->select('portaservi_professores');
					if($select){
						foreach ($select as $portaservi_professores) {	
							echo "<tr><td>".$portaservi_professores['prof_nome']."</td>";
							echo "<td>".$portaservi_professores['prof_disciplina']."</td>";
							echo "<td>".$portaservi_professores['prof_data']."</td>";
							echo "<td>".$portaservi_professores['aluno']."</td>";
							echo "<td>".$portaservi_professores['matricula']."</td>";
							
						}
					}
				?>		
				
			
			</tbody>
		</table>
		<?php include 'php/footer.php' ?>
	</body>
</html>
