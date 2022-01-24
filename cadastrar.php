<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\vaga;
define('TITLE','Cadastrar vaga');

if (isset($_POST['nome'],$_POST['cpf'],$_POST['email'],$_POST['descricao'])){
    $obVaga = new Vaga;
    $obVaga->nome    = $_POST['nome'];
    $obVaga->cpf = $_POST['cpf'];
    $obVaga->email     = $_POST['email'];
    $obVaga->descricao     = $_POST['descricao'];
    $obVaga->cadastrar();

    header('location: index.php?status=success');
    exit;
  
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
