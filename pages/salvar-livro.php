<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome    = $_POST["titulo_livro"];
			$categoria=$_POST["categoria_id_categoria"];
			$edicao=$_POST["edicao_livro"];
			$ano=$_POST["ano_livro"];
			$autor=$_POST["autor_livro"];
			$editora= $_POST["editora_livro"];
			$localidade= $_POST["localidade_livro"];

			$sql = "INSERT INTO livro (
						titulo_livro, 
						categoria_id_categoria,
						edicao_livro,
						autor_livro,
						ano_livro,
						editora_livro,
						localidade_livro	
					) VALUES (
						'{$nome}',
						'{$categoria}',
						'{$edicao}',
						'{$autor}',
						'{$ano}',
						'{$editora}',
						'{$localidade}'
				    )";

			$res = $conn -> query($sql) or die($conn->error);

			if ($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}else{
				print "<script>alert('Não foi possivel cadastrar');</script>";
				print "<script>location.href='?page=listar-livro';</script>";

			}
			break;
		
		case 'editar':
			$nome    = $_POST["titulo_livro"];
			$categoria=$_POST["categoria_id_categoria"];
			$edicao=$_POST["edicao_livro"];
			$ano=$_POST["ano_livro"];
			$autor=$_POST["autor_livro"];
			$editora= $_POST["editora_livro"];
			$localidade= $_POST["localidade_livro"];

			$sql_1 = "UPDATE livro SET titulo_livro='{$nome}', categoria_id_categoria='{$categoria}', edicao_livro='{$edicao}', ano_livro='{$ano}', autor_livro='{$autor}', editora_livro='{editora}', localidade_livro='{$localidade}' Where id_livro=".$_POST["id_livro"];  

			

			$res_1 = $conn->query($sql_1) or die($conn->error);

			if($res_1==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM livro WHERE id_livro=".$_REQUEST["id_livro"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-livro';</script>";
			}
			break;
	}