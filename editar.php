<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\vaga;
define('TITLE','Editar vaga');

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

$obVaga = Vaga::getVaga($_GET['id']);

if(!$obVaga instanceof Vaga){
    header('location: index.php?status=error');
    exit;
}

if (isset($_POST['nome'],$_POST['cpf'],$_POST['email'],$_POST['descricao'])){
    $obVaga->nome    = $_POST['nome'];
    $obVaga->cpf = $_POST['cpf'];
    $obVaga->email     = $_POST['email'];
    $obVaga->descricao     = $_POST['descricao'];
    $obVaga->atualizar();

    header('location: index.php?status=success');
    exit;
  
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
