<h1>Listar Aluno</h1>
<?php
	$sql = "SELECT * FROM aluno";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>E-mail</th>";
		print "<th>Data de Nascimento</th>";
		print "<th>Telefone</th>";
		print "<th>Endereço</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_aluno."</td>";
			print "<td>".$row->nome_aluno."</td>";
			print "<td>".$row->email_aluno."</td>";
			print "<td>".$row->dt_nasc_aluno."</td>";
			print "<td>".$row->fone_aluno."</td>";
			print "<td>".$row->end_aluno."</td>";
			print "<td>
					<button class='btn btn-primary' onclick=\"location.href='?page=editar-aluno&id_aluno=".$row->id_aluno."';\">Editar</button>

					<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-aluno&acao=excluir&id_aluno=".$row->id_aluno."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultado.</div>";
	}
?>