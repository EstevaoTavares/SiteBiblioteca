<h1>Cadastrar Reservas</h1>
<form action="?page=salvar-reserva" method="POST">
	<input type="hidden" name="acao" value="cadastrar">		

	<div class="mb-3">
		<label>Livro</label>
		<select name="livro_id_livro" class="form-control">
			<option>Selecione o livro</option>
		<?php
			$sql= "SELECT * FROM  livro";

			$res= $conn->query($sql) or die ($conn->error);

			if($res->num_rows > 0){
				while($row = $res->fetch_object()){

					print  "<option value='".$row->id_livro."'>";
					print $row->titulo_livro. "</option>";

				}


			}else{

			}

		?>
		</select>
	</div>

	<div class="mb-3">
		<label>aluno</label>
		<select name="aluno_id_aluno" class="form-control">
			<option>Selecione o aluno(a)</option>
		<?php
			$sql_1= "SELECT * FROM  aluno";

			$res_1= $conn->query($sql_1) or die ($conn->error);

			if($res_1->num_rows > 0){
				while($row = $res_1->fetch_object()){

					print  "<option value='".$row->id_aluno."'>";
					print $row->nome_aluno. "</option>";

				}


			}else{

			}

		?>
		</select>
	</div>

	<div class="mb-3">
		<label>atendente</label>
		<select name="atendente_id_atendente" class="form-control">
			<option>Selecione a atendente</option>
		<?php
			$sql_2= "SELECT * FROM  atendente";

			$res_2= $conn->query($sql_2) or die ($conn->error);

			if($res_2->num_rows > 0){
				while($row = $res_2->fetch_object()){

					print  "<option value='".$row->id_atendente."'>";
					print $row->nome_atendente. "</option>";

				}


			}else{

			}

		?>
		</select>
	</div>
	
	<div class="mb-3">
		<label>Data da Reserva</label>
		<input type="date" name="data_emprestimo" class="form-control">
	</div>
	<div class="mb-3">
		<label>data da Entrega</label>
		<input type="date" name="data_entrega" class="form-control">
	</div>
	

	
	
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
	

</form>