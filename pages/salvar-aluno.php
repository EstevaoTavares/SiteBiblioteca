<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome    = $_POST["nome_aluno"];
			$email   = $_POST["email_aluno"];
			$dt_nasc = $_POST["dt_nasc_aluno"];
			$fone    = $_POST["fone_aluno"];
			$end     = $_POST["end_aluno"];

			$sql = "INSERT INTO aluno (nome_aluno, email_aluno, dt_nasc_aluno, fone_aluno, end_aluno) VALUES ('{$nome}','{$email}','{$dt_nasc}','{$fone}','{$end}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-aluno';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-aluno';</script>";
			}
			break;
		
		case 'editar':
			$nome    = $_POST["nome_aluno"];
			$email   = $_POST["email_aluno"];
			$dt_nasc = $_POST["dt_nasc_aluno"];
			$fone    = $_POST["fone_aluno"];
			$end     = $_POST["end_aluno"];

			$sql = "UPDATE aluno SET nome_aluno='{$nome}', email_aluno='{$email}', dt_nasc_aluno='{$dt_nasc}', fone_aluno='{$fone}', end_aluno='{$end}' WHERE id_aluno=".$_POST["id_aluno"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-aluno';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-aluno';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM aluno WHERE id_aluno=".$_REQUEST["id_aluno"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-aluno';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-aluno';</script>";
			}
			break;
	}