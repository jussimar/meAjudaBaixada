<?php

//cadastro de dependente 
	if($_POST){
		if($_POST['acao'] == 'cadastrar'){
			CadastrarDependente($_POST['dependente'], $_POST['dt_nasc'], $_POST['cd_cpf'], $_POST['id_solicitante']);
		}
		else if($_POST['acao'] == 'atualizar'){
			AtualizarDependente($_POST['cd_dependente'], $_POST['dependente'], $_POST['dt_nasc'], $_POST['cd_cpf'], $_POST['id_solicitante']);
		}
	}

	

	if($_GET){
		if($_GET['acao'] == 'excluir'){
			ExcluirDependente($_POST['cd_dependente']);
		}
		else if($_GET['acao'] == 'listar'){
			$res = ListarDependente($_POST['cd_dependente'], $_POST['id_solicitante']);

			echo json_encode($res);
		}
	}
?>