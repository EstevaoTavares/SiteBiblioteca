<h1>Listar Reservas</h1>

<?php 
	
	$sql = "SELECT * FROM reserva AS a 
			INNER JOIN  aluno as b
			ON b.id_aluno= a.aluno_id_aluno
			INNER JOIN  livro as c
			ON c.id_livro= a.livro_id_livro
			INNER JOIN  atendente as d
			ON d.id_atendente= a.atendente_id_atendente";

	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;

	print "<p>Encontrou <b>".$qtd."</b> resultado(s).</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered' >";
		print "<tr>";
			print "<th>#</th>";
			print "<th>Título</th>";
			print "<th>Aluno</th>";
			print "<th>Atendente</th>";
			print "<th>Data de Reserva</th>";
			print "<th>Data de Entrega</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_reserva."</td>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->nome_aluno."</td>";
			print "<td>".$row->nome_atendente."</td>";
			print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->data_entrega."</td>";

			print "<td>
						<button class='btn btn-primary' onclick=\"location.href='?page=editar-reserva&id_reserva=".$row->id_reserva."';\">Editar</button>
						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-reserva&acao=excluir&id_reserva=".$row->id_reserva."';}else{false;}\">Excluir</button>

				   </td>";
			print "</tr>";
		}
		print" </table>";
	}else{
		print " <div class='alert aleart-danger'>Não encontrou resultados</div>";
	}
?>