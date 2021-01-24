<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "usbw";
    $db = "meajudabaixada";
    $conexao = new mysqli($servidor, $usuario, $senha, $db);
    
    if(!$conexao) {     
      echo "Erro de conexão! {$conexao->error}";      
    }
    
    /*** CATEGORIA ***/
    function CadastrarCategoria($nome){
      $sql = "INSERT INTO tb_categoria VALUES('{$nome}')";
      $executa = $GLOBALS['conexao']->query($sql);
      
      if($executa){
        echo "Categoria cadastrada com sucesso!";
      } else {
        echo "Ocorreu um erro ao cadastrar Categoria";
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
        echo "Categoria excluída com sucesso!";
      } else {
        echo "Ocorreu um erro ao excluir Categoria";
      }
    }
    
    function AtualizarCategoria($cd_categoria, $nm_categoria){
      $sql = "UPDATE tb_categoria SET nm_categoria = '{$nm_categoria}' WHERE cd_categoria = {$cd_categoria}";
      $executa = $GLOBALS['conexao']->query($sql);
      
      if($executa){
        echo "Categoria atualizada com sucesso!";
      } else {
        echo "Ocorreu um erro ao atualizar Categoria";
      }
    }

    /*** PARCEIRO ***/
    function CadastrarParceiro($nm_parceiro, $cd_fone_contato, $nm_email, $nm_endereco, $nm_ponto_referencia, $nm_bairro, $nm_cidade, $ds_parceiro){
      $sql = "INSERT INTO tb_parceiro VALUES('{$nm_parceiro}', '{$cd_fone_contato}', '{$nm_email}', '{$nm_endereco}', '{$nm_ponto_referencia}', '{$nm_bairro}', '{$nm_cidade}', '{$ds_parceiro}')";
      $executa = $GLOBALS['conexao']->query($sql);
      
      if($executa){
        echo "Parceiro cadastrado com sucesso!";
      } else {
        echo "Ocorreu um erro ao cadastrar parceiro";
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
        echo "Parceiro excluido com sucesso!";
      } else {
        echo "Ocorreu um erro ao excluir parceiro";
      }
    }
    
    function AtualizarParceiro($cd_parceiro, $nm_parceiro, $cd_fone_contato, $nm_email, $nm_endereco, $nm_ponto_referencia, $nm_bairro, $nm_cidade, $ds_parceiro){
      $sql = "UPDATE tb_parceiro SET nm_parceiro = '{$nm_parceiro}', cd_fone_contato = '{$cd_fone_contato}', nm_email = '{$nm_email}', nm_endereco = '{$nm_endereco}', nm_ponto_referencia = '{$nm_ponto_referencia}', nm_bairro = '{$nm_bairro}', nm_cidade = '{$nm_cidade}', ds_parceiro = '{$ds_parceiro}' WHERE cd_parceiro = {$cd_parceiro}";
      $executa = $GLOBALS['conexao']->query($sql);
      
      if($executa){
        echo "Parceiro atualizado com sucesso!";
      } else {
        echo "Ocorreu um erro ao atualizar parceiro";
      }
    }

    /*** DOADOR ***/
    function CadastrarDoador($nm_doador, $nm_email, $cd_fone_contato, $st_anonimo){
      $sql = "INSERT INTO tb_doador VALUES('{$nm_doador}', '{$nm_email}', '{$cd_fone_contato}', $st_anonimo)";
      $executa = $GLOBALS['conexao']->query($sql);
        
      if($executa){
        echo "Doador cadastrado com sucesso!";
      } else {
        echo "Ocorreu um erro ao cadastrar doador";
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
        echo "Doador excluido com sucesso!";
      } else {
        echo "Ocorreu um erro ao excluir doador";
      }
    }
    
    function AtualizarDoador($cd_doador, $nm_doador, $nm_email, $cd_fone_contato, $st_anonimo){
      $sql = "UPDATE tb_doador SET nm_doador = '{$nm_doador}', nm_email = '{$nm_email}', cd_fone_contato = '{$cd_fone_contato}', st_anonimo = {$st_anonimo} WHERE cd_doador = {$cd_doador}";
      $executa = $GLOBALS['conexao']->query($sql);
        
      if($executa){
        echo "Doador atualizado com sucesso!";
      } else {
        echo "Ocorreu um erro ao atualizar doador";
      }
    }

    /*** PEDIDO ***/
    function CadastrarPedido($id_solicitante, $dt_pedido, $id_categoria, $ds_pedido, $st_pedido, $dt_confirma_pedido, $id_parceiro, $dt_entrega, $id_doador){
      $sql = "INSERT INTO tb_pedido VALUES({$id_solicitante}, '{$dt_pedido}', {$id_categoria}, '{$ds_pedido}', '{$st_pedido}', '{$dt_confirma_pedido}', {$id_parceiro}, '{$dt_entrega}', {$id_doador})";
      $executa = $GLOBALS['conexao']->query($sql);
      
      if($executa){
        echo "Pedido cadastrado com sucesso!";
      } else {
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
        // Se foi selecionada uma categoria,
        if(sizeof($id_categoria) == 1){
          // mostre o id dela.
          $sql .= "= {$id_categoria}";
        // Se não, há mais do que uma categoria;
        } else {
          // Usa-se o comando IN;
          $sql .= "IN(";
          // Para cada categoria selecionada;
          for($i = 0; $i < sizeof($id_categoria); $i++){
            // Juntá-las separando por virgula;
            $sql .= "{$id_categoria[$i]},";
          }
          
          // Tirar a ultima virgula;
          $sql = substr($sql, 0, -1);
          // E fechar parenteses.
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
          echo "Pedido excluido com sucesso!";
      } else {
          echo "Ocorreu um erro ao excluir pedido";
      }
    }
    
    function AtualizarPedido($cd_pedido, $id_solicitante, $dt_pedido, $id_categoria, $ds_pedido, $st_pedido, $dt_confirma_pedido, $id_parceiro, $dt_entrega, $id_doador){
        $sql = "UPDATE tb_pedido SET id_solicitante = {$id_solicitante}, dt_pedido = '{$dt_pedido}', id_categoria = {$id_categoria}, ds_pedido = '{$ds_pedido}', st_pedido = '{$st_pedido}', dt_confirma_pedido = '{$dt_confirma_pedido}', id_parceiro = {$id_parceiro}, dt_entrega = '{$dt_entrega}', id_doador = {$id_doador} WHERE cd_pedido = {$cd_pedido}";
        $executa = $GLOBALS['conexao']->query($sql);
        
        if($executa){
          echo "Pedido atualizado com sucesso!";
        } else {
          echo "Ocorreu um erro ao atualizar pedido";
        }
    }

    /*** SOLICITANTE ***/
    function CadastrarSolicitante($nm_solicitante, $cd_cpf, $dt_nascimento, $cd_senha, $nm_endereco, $nm_bairro, $nm_cidade, $nm_email, $cd_fone_contato, $id_amigo, $dt_cadastro){
      $sql = "INSERT INTO tb_solicitante VALUES('{$nm_solicitante}', '{$cd_cpf}', '{$dt_nascimento}', '{$cd_senha}', '{$nm_endereco}', '{$nm_bairro}', '{$nm_cidade}', '{$nm_email}', '{$cd_fone_contato}', {$id_amigo}, '{$dt_cadastro}')";
      $executa = $GLOBALS['conexao']->query($sql);
      
      if($executa){
        echo "Solicitante cadastrado com sucesso!";
      } else {
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
        echo "Solicitante excluido com sucesso!";
      } else {
        echo "Ocorreu um erro ao excluir solicitante";
      }
    }
    
    function AtualizarSolicitante($cd_solicitante, $nm_solicitante, $cd_cpf, $dt_nascimento, $cd_senha, $nm_endereco, $nm_bairro, $nm_cidade, $nm_email, $cd_fone_contato, $id_amigo, $dt_cadastro){
      $sql = "UPDATE tb_solicitante SET nm_solicitante = '{$nm_solicitante}', cd_cpf = '{$cd_cpf}', dt_nascimento = '{$dt_nascimento}', cd_senha = '{$cd_senha}', nm_endereco = '{$nm_endereco}', nm_bairro = '{$nm_bairro}', nm_cidade = '{$nm_cidade}', nm_email = '{$nm_email}', cd_fone_contato = '{$cd_fone_contato}', id_amigo = {$id_amigo}, dt_cadastro = '{$dt_cadastro}' WHERE cd_solicitante = {$cd_solicitante}";
      $executa = $GLOBALS['conexao']->query($sql);
      
      if($executa){
        echo "Solicitante atualizado com sucesso!";
      } else {
        echo "Ocorreu um erro ao atualizar solicitante";
      }
    }

    /*** AMIGO ***/
    function CadastrarAmigo($nm_amigo, $cd_fone_contato, $nm_email, $nm_login, $cd_senha){
      $sql = "INSERT INTO tb_amigo VALUES('{$nm_amigo}', '{$cd_fone_contato}', '{$nm_email}', '{$nm_login}', '{cd_senha}')";
      $executa = $GLOBALS['conexao']->query($sql);
      
      if($executa){
        echo "Amigo cadastrado com sucesso!";
      } else {
        echo "Ocorreu um erro ao cadastrar amigo";
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
        echo "Amigo excluido com sucesso!";
      } else {
        echo "Ocorreu um erro ao excluir amigo";
      }
    }
    
    function AtualizarAmigo($cd_amigo, $nm_amigo, $cd_fone_contato, $nm_email, $nm_login, $cd_senha){
      $sql = "UPDATE tb_amigo SET nm_amigo = '{$nm_amigo}', cd_fone_contato = '{$cd_fone_contato}', nm_email = '{$nm_email}', nm_login = '{$nm_login}', cd_senha = '{$cd_senha}' WHERE cd_amigo = {$cd_amigo}";
      $executa = $GLOBALS['conexao']->query($sql);
      
      if($executa){
        echo "Amigo atualizado com sucesso!";
      } else {
        echo "Ocorreu um erro ao atualizar amigo";
      }
    }

    /*** DEPENDENTE ***/
    function CadastrarDependente($nm_dependente, $dt_nascimento, $cd_cpf, $id_solicitante){
      $sql = "INSERT INTO tb_dependente VALUES('{$nm_dependente}', '{$dt_nascimento}', '{$cd_cpf}', {$id_solicitante}";
      $executa = $GLOBALS['conexao']->query($sql);
      
      if($executa){
        echo "Dependente cadastrado com sucesso!";
      } else {
        echo "Ocorreu um erro ao cadastrar dependente";
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
        echo "Dependente excluido com sucesso!";
      } else {
        echo "Ocorreu um erro ao excluir dependente";
      }
    }
    
    function AtualizarDependente($cd_dependente, $nm_dependente, $dt_nascimento, $cd_cpf, $id_solicitante){
      $sql = "UPDATE tb_dependente SET nm_dependente = '{$nm_dependente}', dt_nascimento = '{$dt_nascimento}', cd_cpf = '{$cd_cpf}', id_solicitante = {$id_solicitante} WHERE cd_dependente = {$cd_dependente}";
      $executa = $GLOBALS['conexao']->query($sql);
          
      if($executa){
        echo "Dependente atualizado com sucesso!";
      } else {
        echo "Ocorreu um erro ao atualizar dependente";
      }
    }
?>
