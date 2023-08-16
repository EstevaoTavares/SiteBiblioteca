<h1>Editar Reservas</h1>
<?php
$sql_3= "SELECT*FROM Reserva WHERE id_reserva=". $_REQUEST["id_reserva"];

	$res_3 = $conn->query($sql_3) or die($conn->error);

	$row_3 = $res_3->fetch_object();
?>
<form action="?page=salvar-reserva" method="POST">
	<input type="hidden" name="acao" value="editar">		

	<div class="mb-3">
		<label>Livro</label>
		<select name="livro_id_livro" class="form-control">
			<option>Selecione o livro</option>
		<?php
			$sql= "SELECT * FROM  livro";

			$res= $conn->query($sql) or die ($conn->error);

			if($res->num_rows > 0){
					while($row = $res->fetch_object()){

						if( $row->id_livro == $row_3->livro_id_livro){
							print  "<option value='".$row->id_livro."' selected >";
							print $row->titulo_livro. "</option>";
						}else{
							print  "<option value='".$row->id_livro."'>";
							print $row->titulo_livro. "</option>";

						}

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
				while($row_1 = $res_1->fetch_object()){

						if( $row_1->id_aluno == $row_3->aluno_id_aluno){
							print  "<option value='".$row_1->id_aluno."' selected >";
							print $row_1->nome_aluno. "</option>";
						}else{
							print  "<option value='".$row_1->id_aluno."'>";
							print $row_1->nome_aluno. "</option>";

						}


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
				while($row_2 = $res_2->fetch_object()){

					
						if( $row_2->id_atendente== $row_3->atendente_id_atendente){
							print  "<option value='".$row->id_atendente."' selected >";
							print $row_2->nome_atendente. "</option>";
						}else{
							print  "<option value='".$row->id_atendente."'>";
							print $row_2->nome_atendente. "</option>";

						}


				}


			}else{

			}

		?>
		</select>
	</div>
	
	<div class="mb-3">
		<label>Data da Reserva</label>
		<input type="date" name="data_emprestimo" class="form-control"   value="<?php print $row_3->data_emprestimo ?>">
	</div>
	<div class="mb-3">
		<label>data da Entrega</label>
		<input type="date" name="data_entrega" class="form-control"   value="<?php print $row_3->data_entrega ?>">
	</div>
	

	
	
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
	

</form>