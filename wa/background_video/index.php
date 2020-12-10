<?php
header('Access-Control-Allow-Origin: *');
require_once('../../includes/funcoes.php');
require_once('../../database/config.database.php');
require_once('../../database/config.php');
$db_id = $_GET['id'];
$data = DBRead('background_video','*' ,"WHERE id = '{$db_id}'")[0];
$id = $data['path'];
$altura = $data['altura'];
$path ="src/".$data['tipo'].".php";
require_once($path);
?>