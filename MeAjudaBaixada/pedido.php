<?php
  if($_POST){
    if($_POST['acao'] == 'cadastrar'){
      CadastrarPedido($_POST['id_solicitante'], $_POST['dt_pedido'], $_POST['id_categoria'], $_POST['ds_pedido'], $_POST['st_pedido'], $_POST['dt_confirma_pedido'], $_POST['id_parceiro'], $_POST['dt_entrega'], $_POST['id_doador']);
    }
    
    else if($_POST['acao'] == 'atualizar'){
      AtualizarPedido($_POST['cd_pedido'], $_POST['id_solicitante'], $_POST['dt_pedido'], $_POST['id_categoria'], $_POST['ds_pedido'], $_POST['st_pedido'], $_POST['dt_confirma_pedido'], $_POST['id_parceiro'], $_POST['dt_entrega'], $_POST['id_doador']);
    }
  }

  if($_GET){
    if($_GET['acao'] == 'excluir'){
      ExcluirPedido($_POST['cd_pedido']);
    }
    
    else if($_GET['acao'] == 'listar'){
      $res = ListarPedido($_POST['cd_pedido'], $_POST['id_solicitante'], $_POST['id_categoria'], $_POST['id_parceiro'], $_POST['id_doador']);

      echo json_encode($res);
    }
  }
?>