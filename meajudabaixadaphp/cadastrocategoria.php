<?php
	
	//cadastro de categoria.php

	if($_POST){
		
		if($_POST['acao'] == 'cadastrar'){
			CadastrarCategoria($_POST['nome']);
		}
		else if($_POST['acao'] == 'atualizar'){
			AtualizarCategoria($_POST['cd_categoria'], $_POST['categoria']);
		}
	}



	if($_GET){
		if($_GET['acao'] == 'excluir'){
			ExcluirCategoria($_GET['cd_categoria']);
		}
		else if($_GET['acao'] == 'listar'){
			$res = ListarCategoria($_GET['cd_categoria']);

			echo json_encode($res);
		}
	}

?>