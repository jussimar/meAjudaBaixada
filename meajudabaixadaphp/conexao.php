<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "usbw";
    $db = "meajudabaixada";
    $conexao = new mysqli($servidor, $usuario, $senha, $db);
    if(!$conexao) {     
            echo "Erro de conexão! {$conexao->error}";      
    }




    /****CATEGORIA****/
    function CadastrarCategoria($nome){
        $sql = "INSERT INTO tb_categoria VALUES('{$nome}')";
        $executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Categoria cadastrada com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao cadastrar";
        }
    }
    
    function ListarCategoria($cd_categoria){
        $sql = 'SELECT * FROM tb_categoria';
        if($cd_categoria > 0){
            $sql.= ' WHERE cd_categoria = $cd_categoria';
        }
        $resultado = $GLOBALS['conexao']->query($sql);
        return $resultado;
    }
    
    function ExcluirCategoria($cd_categoria){
        $sql = "DELETE FROM tb_categoria WHERE cd_categoria = {$cd_categoria}";
        $executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Categoria excluída com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao excluir";
        }
    }
    
    function AtualizarCategoria($cd_categoria, $nm_categoria){
        $sql = "UPDATE tb_categoria 
        SET categoria = '{$categoria}' WHERE cd_categoria = {$cd_categoria}";
        $executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Categoria atualizada com sucesso!";
        }else{
            echo "Ocorreu um erro ao atualizar";
        }
    }

    /****PARCEIRO****/
    function CadastrarParceiro($parceiro, $cd_contato, $email, $endereco, $nm_ref, $bairro, $cidade, $ds_parceiro){
    	$sql = "INSERT INTO tb_parceiro VALUES('{$parceiro}', '{$cd_contato}', '{$email}', '{$endereco}', '{$nm_ref}', '{$bairro}', '{$cidade}', '{$ds_parceiro}')";
    	$executa = $GLOBALS['conexao']->query($sql);
    	if($executa){
            echo "Parceiro cadastrado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao cadastrar";
        }

    }
    
    function ListarParceiro($cd_parceiro){
    	$sql = "SELECT * FROM tb_parceiro";
    	if($cd_parceiro > 0){
            $sql.= " WHERE cd_parceiro = {$cd_parceiro}";
        }
        $resultado = $GLOBALS['conexao']->query($sql);
        return $resultado;
    }
    
    function ExcluirParceiro($cd_parceiro){
    	$sql = "DELETE FROM tb_parceiro WHERE cd_parceiro = {$cd_parceiro}";
        $executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Parceiro excluido com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao excluir";
        }
    }
    
    function AtualizarParceiro($cd_parceiro, $parceiro, $cd_contato, $email, $endereco, $nm_ref, $bairro, $cidade, $ds_parceiro){
    	$sql = "UPDATE tb_parceiro 
        SET parceiro = '{$parceiro}',
         cd_contato = '{$cd_contato}', 
         email    = '{$email}', 
         endereco = '{$endereco}',
         nm_ref   = '{$nm_ref}', 
         bairro   = '{$bairro}',
         cidade   = '{$cidade}',
         ds_parceiro = '{$ds_parceiro}' WHERE cd_parceiro = {$cd_parceiro}";

        $executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Parceiro atualizado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao atualizar ";
        }
    }




    /****DOADOR****/
    function CadastrarDoador($doador, $email, $cd_contato, $st_anon){
    	$sql = "INSERT INTO tb_doador VALUES('{$doador}', '{$email}', '{$cd_contato}', $st_anonimo)";
    	$executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Doador cadastrado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao cadastrar";
        }
    }
    
    function ListarDoador($cd_doador){
    	$sql = "SELECT * FROM tb_doador";
    	if($cd_doador > 0){
            $sql.= " WHERE cd_doador = {$cd_doador}";
        }
        $resultado = $GLOBALS['conexao']->query($sql);
        return $resultado;
    }
    
    function ExcluirDoador($cd_doador){
    	$sql = "DELETE FROM tb_doador WHERE cd_doador = {$cd_doador}";
        $executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Doador excluído com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao excluir";
        }
    }
    
    function AtualizarDoador($cd_doador, $doador, $email, $cd_contato, $st_anon){
    	$sql = "UPDATE tb_doador 
        SET doador = '{$doador}',
        email      = '{$email}', 
        cd_contato = '{$cd_contato}',
        st_anon    = {$st_anon} WHERE cd_doador = {$cd_doador}";

    	$executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Doador atualizado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao atualizar ";
        }
    }




    /****PEDIDO****/
    function CadastrarPedido($id_solicitante, $pedido, $id_categoria, $ds_pedido, $st_pedido, $confirmacao_pedido, $id_parceiro, $dt_entrega, $id_doador){
		$sql = "INSERT INTO tb_pedido VALUES({$id_solicitante}, '{$dt_pedido}', {$id_categoria}, '{$ds_pedido}', '{$st_pedido}', '{$confirmacao_pedido}', {$id_parceiro}, '{$dt_entrega}', {$id_doador})";

		$executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Pedido cadastrado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao cadastrar pedido";
        }
	}
    
    function ListarPedido($cd_pedido, $id_solicitante, $id_categoria, $id_parceiro, $id_doador){
		$sql = "SELECT * FROM tb_pedido";
    	if($cd_pedido > 0){
            $sql.= " WHERE cd_pedido = {$cd_pedido}";
        }
        else if($id_solicitante > 0){
            $sql .= " WHERE id_solicitante = {$id_solicitante}";
        }
        else if($id_categoria > 0){
            $sql .= " WHERE id_categoria = ";
            // Se for selecionada mais de uma categoria :
            if(sizeof($id_categoria) == 1){
              
                $sql .= "= {$id_categoria}";
            // Se não, há mais do que uma categoria:
            } else {
                // Usa-se o comando IN
                $sql .= "IN(";
                // Para cada categoria selecionada;
                for($i = 0; $i < sizeof($id_categoria); $i++){

                    $sql .= "{$id_categoria[$i]},";
                }
                
                $sql = substr($sql, 0, -1);

                $sql .= ")";
            }
        }
        else if($id_parceiro > 0){
            $sql .= " WHERE id_parceiro = {$id_parceiro}";
        }
        else if($id_doador > 0){
            $sql .= " WHERE id_doador = {$id_doador}";
        }
        $resultado = $GLOBALS['conexao']->query($sql);
        return $resultado;
	}
    
    function ExcluirPedido($cd_pedido){
		$sql = "DELETE FROM tb_pedido WHERE cd_pedido = {$cd_pedido}";
        $executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Pedido excluído com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao excluir";
        }
	}
    
    function AtualizarPedido($cd_pedido, $id_solicitante, $dt_pedido, $id_categoria, $ds_pedido, $st_pedido, $confirmacao_pedido, $id_parceiro, $dt_entrega, $id_doador){
		$sql = "UPDATE tb_pedido 
        SET id_solicitante = {$id_solicitante},
         dt_pedido    = '{$dt_pedido}',
         id_categoria = {$id_categoria},
         ds_pedido   = '{$ds_pedido}',
         st_pedido   = '{$st_pedido}', 
         dt_confirma_pedido = '{$confirmacao_pedido}',
         id_parceiro = {$id_parceiro},
         dt_entrega  = '{$dt_entrega}',
         id_doador   = {$id_doador} WHERE cd_pedido = {$cd_pedido}";

		$executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Pedido atualizado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao atualizar ";
        }
	}


    /****SOLICITANTE ****/
    function CadastrarSolicitante($solicitante, $cd_cpf, $dt_nasc, $cd_senha, $endereco, $bairro, $cidade, $email, $cd_contato, $id_amigo, $dt_cadastro){

		$sql = "INSERT INTO tb_solicitante VALUES('{$solicitante}', '{$cd_cpf}', '{$dt_nasc', '{$cd_senha}', '{$endereco}', '{$bairro}', '{$cidade}', '{$email}', '{$cd_contato}', {$id_amigo}, '{$dt_cadastro}')";

		$executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Solicitante cadastrado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao cadastrar solicitante";
        }
	}
    
    function ListarSolicitante($cd_solicitante, $id_amigo){
		$sql = "SELECT * FROM tb_solicitante";
		if($cd_solicitante > 0){
            $sql.= " WHERE cd_solicitante = {$cd_solicitante}";
        }
        else if($id_amigo > 0){
            $sql.= " WHERE id_amigo = {$id_amigo}";
        }
        $resultado = $GLOBALS['conexao']->query($sql);
        return $resultado;
	}
    
    function ExcluirSolicitante($cd_solicitante){
		$sql = "DELETE FROM tb_solicitante WHERE cd_solicitante = {$cd_solicitante}";
        $executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Solicitante excluído com sucesso!";
        }else{
            echo "Ocorreu um erro ao excluir solicitante";
        }
	}
    
    function AtualizarSolicitante($cd_solicitante, $solicitante, $cd_cpf, $dt_nasc, $cd_senha, $endereco, $bairro, $cidade, $email, $cd_contato, $id_amigo, $dt_cadastro){
		$sql = "UPDATE tb_solicitante
         SET solicitante = '{$solicitante}',
        cd_cpf   = '{$cd_cpf}',
        dt_nasc  = '{$dt_nascimento}',
        cd_senha = '{$cd_senha}',
        endereco = '{$endereco}',
        bairro   = '{$bairro}', 
        cidade   = '{$cidade}',
        email    = '{$email}',
        cd_contato = '{$cd_contato}',
        id_amigo = {$id_amigo}, 
        dt_cadastro = '{$dt_cadastro}' WHERE cd_solicitante = {$cd_solicitante}";
		$executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Solicitante atualizado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao atualizar";
        }
	}

    /** AMIGO **/
    function CadastrarAmigo($amigo, $cd_contato, $email, $login, $cd_senha){
		$sql = "INSERT INTO tb_amigo VALUES('{$amigo}', '{$cd_contato}', '{$email}', '{$login}', '{cd_senha}')";
		$executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Amigo cadastrado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao cadastrar";
        }
	}
    
    function ListarAmigo($cd_amigo){
		$sql = "SELECT * FROM tb_amigo";
		if($cd_amigo > 0){
            $sql.= " WHERE cd_amigo = {$cd_amigo}";
        }
        $resultado = $GLOBALS['conexao']->query($sql);
        return $resultado;
	}
    
    function ExcluirAmigo($cd_amigo){
		$sql = "DELETE FROM tb_amigo WHERE cd_amigo = {$cd_amigo}";
        $executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Amigo excluído com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao excluir amigo";
        }
	}
    
    function AtualizarAmigo($cd_amigo, $amigo, $cd_contato, $email, $login, $cd_senha){
		$sql = "UPDATE tb_amigo 
        SET amigo  = '{$amigo}',
        cd_contato = '{$cd_contato}',
        email      = '{$email}',
        login      = '{$login}', 
        cd_senha   = '{$cd_senha}' WHERE cd_amigo = {$cd_amigo}";

		$executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Amigo atualizado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao atualizar";
        }
	}



    /**** DEPENDENTE ****/
    function CadastrarDependente($dependente, $dt_nasc, $cd_cpf, $id_solicitante){
		$sql = "INSERT INTO tb_dependente VALUES('{$dependente}', '{$dt_nasc}', '{$cd_cpf}', {$id_solicitante}";
		$executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Dependente cadastrado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao cadastrar";
        }
	}
    
    function ListarDependente($cd_dependente, $id_solicitante){
		$sql = "SELECT * FROM tb_dependente";
		if($cd_dependente > 0){
            $sql.= " WHERE cd_dependente = {$cd_dependente}";
        }
        else if($id_solicitante > 0){
            $sql.= " WHERE id_solicitante = {$id_solicitante}";
        }
        $resultado = $GLOBALS['conexao']->query($sql);
        return $resultado;
	}
    
    function ExcluirDependente($cd_dependente){
		$sql = "DELETE FROM tb_dependente WHERE cd_dependente = {$cd_dependente}";
        $executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Dependente excluído com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao excluir";
        }
	}
    
    function AtualizarDependente($cd_dependente, $dependente, $dt_nasc, $cd_cpf, $id_solicitante){
		$sql = "UPDATE tb_dependente 
        SET dependente = '{$dependente}', 
        dt_nasc        = '{$dt_nasc}', 
        cd_cpf         = '{$cd_cpf}', 
        id_solicitante = {$id_solicitante} WHERE cd_dependente = {$cd_dependente}";

		$executa = $GLOBALS['conexao']->query($sql);
        if($executa){
            echo "Dependente atualizado com sucesso!!!";
        }else{
            echo "Ocorreu um erro ao atualizar";
        }
	}
?>