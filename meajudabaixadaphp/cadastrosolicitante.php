<?php


//Cadastro de solicitante
	if($_POST){
		if($_POST['acao'] == 'cadastrar'){
			CadastrarSolicitante($_POST['solicitante'], $_POST['cd_cpf'], $_POST['dt_nasc'], $_POST['cd_senha'], $_POST['endereco'], $_POST['bairro'], $_POST['cidade'], $_POST['email'], $_POST['cd_contato'], $_POST['id_amigo'], $_POST['dt_cadastro']);
		}
		else if($_POST['acao'] == 'atualizar'){
			AtualizarSolicitante($_POST['cd_solicitante'], $_POST['solicitante'], $_POST['cd_cpf'], $_POST['dt_nasc'], $_POST['cd_senha'], $_POST['endereco'], $_POST['bairro'], $_POST['cidade'], $_POST['mail'], $_POST['cd_contato'], $_POST['id_amigo'], $_POST['dt_cadastro']);
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