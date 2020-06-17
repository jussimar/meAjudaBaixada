<?php
	// Arquivo que fará um trio com conexao.php e o front-end.
	
	// Funções que fazem inserção ou atualização de alguma informação são POST. O GET será usado em consultas ou exclusões de informações.

	if($_POST){
		// $_POST['acao'] seria, por exemplo, um form com name="acao" com um input com name="cadastrar"
		if($_POST['acao'] == 'cadastrar'){
			CadastrarCategoria($_POST['nome']);
		}
		else if($_POST['acao'] == 'atualizar'){
			AtualizarCategoria($_POST['cd_categoria'], $_POST['nm_categoria']);
		}
	}
	if($_GET){
		if($_GET['acao'] == 'excluir'){
			ExcluirCategoria($_GET['cd_categoria']);
		}
		else if($_GET['acao'] == 'listar'){
			$res = ListarCategoria($_GET['cd_categoria']);

			// Fazendo a codificação pois esta função não retorna mensagem
			echo json_encode($res);
		}
	}

?>