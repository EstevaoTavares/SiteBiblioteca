<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome    = $_POST["aluno_id_aluno"];
			$titulo  = $_POST["livro_id_livro"];
			$atendente  = $_POST["atendente_id_atendente"];
			$dtr = $_POST["data_emprestimo"];
			$dte = $_POST["data_entrega"];
			

			$sql = "INSERT INTO reserva (aluno_id_aluno, livro_id_livro, data_emprestimo, data_entrega, atendente_id_atendente) VALUES ('{$nome}','{$titulo}','{$dtr}','{$dte}','{$atendente}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar-reserva';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-reserva';</script>";
			}
			break;
		
		case 'editar':
			$nome    = $_POST["aluno_id_aluno"];
			$titulo  = $_POST["livro_id_livro"];
			$atendente  = $_POST["atendente_id_atendente"];
			$dtr = $_POST["data_emprestimo"];
			$dte   = $_POST["data_entrega"];

			$sql = "UPDATE reserva SET aluno_id_aluno='{$nome}', livro_id_livro='{$titulo}', data_emprestimo='{$dtr}', atendente_id_atendente='{$atendente}', data_entrega='{$dte}' WHERE id_reserva=".$_POST["id_reserva"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listar-reserva';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-reserva';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM reserva WHERE id_reserva=".$_REQUEST["id_reserva"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listar-reserva';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-reserva';</script>";
			}
			break;
	}