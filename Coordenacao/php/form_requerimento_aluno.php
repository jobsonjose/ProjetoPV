<!DOCTYPE html> 
<html>
	<head>
		<title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		
		<?php include 'estilos.php' ?>
						
	</head>
	<body>
		<?php include 'menulateral.php'; ?>
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
				<input type="submit" value="Enviar" id="btnSalvar" name="submit"/> 
			</form>
		</div>
		
		<table id="tblListar">
			<thead>
				<tr>
					<th colspan="5">Justificar Falta Aluno </th>
				</tr>
				<tr> 
					<th>Nome</th> <th>Curso</th> <th>Matricula</th> <th>Data Inicial</th> <th>Data Final</th>
				</tr>
			</thead>
			<tbody id="corpo">
				<?php
					require_once 'conexao.php';
					$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);

					$select = $conexao->select('portaservi_alunos');
					if($select){
						foreach ($select as $portaservi_alunos) {						
							echo "<tr><td>".$portaservi_alunos['alu_nome']."</td>";
							echo "<td>".$portaservi_alunos['alu_curso']."</td>";
							echo "<td>".$portaservi_alunos['alu_matricula']."</td>";
							echo "<td>".$portaservi_alunos['alu_dataini']."</td>";
							echo "<td>".$portaservi_alunos['alu_datafin']."</td>";
							
						}
					}
				?>		
				
				
			</tbody>
		</table>
		<?php include 'php/footer.php' ?>
	</body>
</html>
