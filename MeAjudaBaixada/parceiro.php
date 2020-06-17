<?php
	if($_POST){
		if($_POST['acao'] == 'cadastrar'){
			CadastrarParceiro($_POST['nm_parceiro'], $_POST['cd_fone_contato'], $_POST['nm_email'], $_POST['nm_endereco'], $_POST['nm_ponto_referencia'], $_POST['nm_bairro'], $_POST['nm_cidade'], $_POST['ds_parceiro']);
		}
		else if($_POST['acao'] == 'atualizar'){
			AtualizarParceiro($_POST['cd_parceiro'], $_POST['nm_parceiro'], $_POST['cd_fone_contato'], $_POST['nm_email'], $_POST['nm_endereco'], $_POST['nm_ponto_referencia'], $_POST['nm_bairro'], $_POST['nm_cidade'], $_POST['ds_parceiro']);
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