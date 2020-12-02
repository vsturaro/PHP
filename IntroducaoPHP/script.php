<?php

//session_start();
//print_r($categorias); imprime toda a array categorias


include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";
$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');


//var_dump($nome); //retorna  tipo e valor
//var_dump($idade);
?>
