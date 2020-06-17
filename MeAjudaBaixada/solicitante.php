<?php
	if($_POST){
		if($_POST['acao'] == 'cadastrar'){
			CadastrarSolicitante($_POST['nm_solicitante'], $_POST['cd_cpf'], $_POST['dt_nascimento'], $_POST['cd_senha'], $_POST['nm_endereco'], $_POST['nm_bairro'], $_POST['nm_cidade'], $_POST['nm_email'], $_POST['cd_fone_contato'], $_POST['id_amigo'], $_POST['dt_cadastro']);
		}
		else if($_POST['acao'] == 'atualizar'){
			AtualizarSolicitante($_POST['cd_solicitante'], $_POST['nm_solicitante'], $_POST['cd_cpf'], $_POST['dt_nascimento'], $_POST['cd_senha'], $_POST['nm_endereco'], $_POST['nm_bairro'], $_POST['nm_cidade'], $_POST['nm_email'], $_POST['cd_fone_contato'], $_POST['id_amigo'], $_POST['dt_cadastro']);
		}
	}
	if($_GET){
		if($_GET['acao'] == 'excluir'){
			ExcluirSolicitante($_POST['cd_solicitante']);
		}
		else if($_GET['acao'] == 'listar'){
			$res = ListarSolicitante($_POST['cd_solicitante'], $_POST['id_amigo']);

			echo json_encode($res);
		}
	}
?>