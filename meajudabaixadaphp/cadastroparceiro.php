<?php


//cadastro parceiro
	if($_POST){
		if($_POST['acao'] == 'cadastrar'){
			CadastrarParceiro($_POST['parceiro'], $_POST['cd_contato'], $_POST['email'], $_POST['endereco'], $_POST['nm_ref'], $_POST['bairro'], $_POST['cidade'], $_POST['ds_parceiro']);
		}
		else if($_POST['acao'] == 'atualizar'){
			AtualizarParceiro($_POST['cd_parceiro'], $_POST['parceiro'], $_POST['cd_contato'], $_POST['email'], $_POST['endereco'], $_POST['nm_ref'], $_POST['bairro'], $_POST['cidade'], $_POST['ds_parceiro']);
		}
	}
	


	
	if($_GET){
		if($_GET['acao'] == 'excluir'){
			ExcluirParceiro($_POST['cd_parceiro']);
		}
		else if($_GET['acao'] == 'listar'){
			$res = ListarParceiro($_POST['cd_parceiro']);
			echo json_encode($res);
		}
	}
?>