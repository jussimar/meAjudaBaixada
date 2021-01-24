<?php
  if($_POST){
    if($_POST['acao'] == 'cadastrar'){
      CadastrarDoador($_POST['nm_doador'], $_POST['nm_email'], $_POST['cd_fone_contato'], $_POST['st_anonimo']);
    }
    
    else if($_POST['acao'] == 'atualizar'){
      AtualizarDoador($_POST['cd_doador'], $_POST['nm_doador'], $_POST['nm_email'], $_POST['cd_fone_contato'], $_POST['st_anonimo']);
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