<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome = $_POST["nome_biblioteca"];
			$end  = $_POST["end_biblioteca"];

			$sql = "INSERT INTO biblioteca (
						nome_biblioteca, 
						end_biblioteca
					) VALUES (
						'{$nome}',
						'{$end}'
					)";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-biblioteca';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-biblioteca';</script>";
			}
			break;
		
		case 'editar':
			$nome = $_POST["nome_biblioteca"];
			$end  = $_POST["end_biblioteca"];

			$sql = "UPDATE biblioteca SET nome_biblioteca='{$nome}', end_biblioteca='{$end}' WHERE id_biblioteca=".$_POST["id_biblioteca"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-biblioteca';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-biblioteca';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM biblioteca WHERE id_biblioteca=".$_REQUEST["id_biblioteca"];
			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-biblioteca';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-biblioteca';</script>";
			}
			break;
	}