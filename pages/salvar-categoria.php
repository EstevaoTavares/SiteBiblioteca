<?php
	switch($_REQUEST["acao"]){
		case 'cadastrar':
			$nome= $_POST["nome_categoria"];
			$sql = "INSERT INTO categoria (
						nome_categoria
							
					) VALUES ('{$nome}'	)";
						

			$res = $conn -> query($sql) or die($conn->error);

			if ($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-categoria';</script>";
			}else{
				print "<script>alert('Não foi possivel cadastrar');</script>";
				print "<script>location.href='?page=listar-categoria';</script>";

			}
			break;
		case 'editar':


			$nome= $_POST["nome_categoria"];
			

			$sql= "UPDATE categoria SET nome_categoria= '{$nome}' WHERE id_categoria=".$_POST["id_categoria"];

			$res = $conn -> query($sql) or die($conn->error);

			if ($res==true){
				print "<script>alert('Editado com sucesso');</script>";
				print "<script>location.href='?page=listar-categoria';</script>";
			}else{
				print "<script>alert('Não foi possivel editar');</script>";
				print "<script>location.href='?page=listar-categoria';</script>";

			}
			break;
		case 'excluir':
			$sql = "DELETE FROM categoria WHERE id_categoria=".$_REQUEST["id_categoria"];

			$res = $conn -> query($sql) or die($conn->error);

			if ($res==true){
				print "<script>alert('Excluido com sucesso');</script>";
				print "<script>location.href='?page=listar-categoria';</script>";
			}else{
				print "<script>alert('Não foi possivel excluir');</script>";
				print "<script>location.href='?page=listar-categoria';</script>";

			}
			break;


	}
