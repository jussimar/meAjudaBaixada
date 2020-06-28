<?php


//cadastro doador
	if($_POST){
		if($_POST['acao'] == 'cadastrar'){
			CadastrarDoador($_POST['doador'], $_POST['email'], $_POST['cd_contato'], $_POST['st_anon']);
		}
		else if($_POST['acao'] == 'atualizar'){
			AtualizarDoador($_POST['cd_doador'], $_POST['doador'], $_POST['email'], $_POST['cd_contato'], $_POST['st_anon']);
		}
	}






	

	if($_GET){
		if($_GET['acao'] == 'excluir'){
			ExcluirDoador($_POST['cd_doador']);
		}
		else if($_GET['acao'] == 'listar'){
			$res = ListarDoador($_POST['cd_doador']);

			echo json_encode($res);
		}
	}
?>