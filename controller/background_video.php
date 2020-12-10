<?php
require_once('database/upload.class.php');
if(!$_SESSION['node']['id']){ die(); exit(); }
$id = $_GET['props'];
$cumprimento = $_POST['cumprimento'];
if($_POST['tipo'] == 'local'){
    if($_FILES['path']['name'] == null){
       $keep = DBRead('background_video','*' ,"WHERE id = '{$id}'")[0];
       $path = $keep['path'];
    }else{
        $upload_folder = 'wa/background_video/uploads/';
        $handle = new Upload($_FILES['path']);
        $handle->file_new_name_body = md5(uniqid(rand(), true));
        $handle->Process($upload_folder);
        $path = $handle->file_dst_name;
    }
}else{
    $path = $_POST['path'];
}
if(isset($_GET['props']) && $id == "0"){
       
      $data = array(
        'nome'           => post('nome'),
        'tipo'           => post('tipo'),
        'altura'         => post('altura'),
        'cumprimento'    => $cumprimento,
        'path'           => $path
      );
      $query = DBCreate('background_video', $data, true);
      
        if ($query != 0) {
            Redireciona('?sucesso');
        } else {
            Redireciona('?erro');
        }
  
  }else if(isset($_GET['props']) && $id != "0"){
    $data = array(
        'nome'           => post('nome'),
        'tipo'           => post('tipo'),
        'altura'         => post('altura'),
        'cumprimento'    => $cumprimento,
        'path'           => $path
      );
      $query =  DBUpdate('background_video', $data, "id = '{$id}'");
      
        if ($query != 0) {
            Redireciona('?sucesso');
        } else {
            Redireciona('?erro');
        }
  }else if(isset($_GET['DeletarBackground'])){
    $id     = get('DeletarBackground');
    $query  = DBDelete('background_video',"id = '{$id}'");
      
        if ($query != 0) {
            Redireciona('?sucesso');
        } else {
            Redireciona('?erro');
        }
  }

