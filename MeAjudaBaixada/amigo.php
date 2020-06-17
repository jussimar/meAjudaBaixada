<?php
	if($_POST){
		if($_POST['acao'] == 'cadastrar'){
			CadastrarAmigo($_POST['nm_amigo'], $_POST['cd_fone_contato'], $_POST['nm_email'], $_POST['nm_login'], $_POST['cd_senha']);
		}
		else if($_POST['acao'] == 'atualizar'){
			AtualizarAmigo($_POST['cd_amigo'], $_POST['nm_amigo'], $_POST['cd_fone_contato'], $_POST['nm_email'], $_POST['nm_login'], $_POST['cd_senha']);
		}
	}
	if($_GET){
		if($_GET['acao'] == 'excluir'){
			ExcluirAmigo($_POST['cd_amigo']);
		}
		else if($_GET['acao'] == 'listar'){
			$res = ListarAmigo($_POST['cd_amigo']);

			echo json_encode($res);
		}
	}
?>