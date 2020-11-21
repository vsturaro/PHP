<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias); imprime toda a array categorias

$nome = $_POST[nome] ;
$idade = $_POST[idade];

if (empty($nome)) //verifica para não ser vazio
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio tente novamente';
    header('location: index.php');
    //echo "<script>alert('O campo nome não pode ser vazio!');</script>";
    return;

}
else if (strlen($nome) < 3) //verifica qtde de caracteres
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve ter pelo menos 3 caracteres tente novamente';
    header('location: index.php');
    return;
}
else if (strlen($nome) > 40) //verifica qtde de caracteres
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ter mais de 40 caracteres tente novamente';
    header('location: index.php');
    return;
}
else if (!is_numeric($idade)) //(!) sever para negar o comando
{
    $_SESSION['mensagem-de-erro'] = 'Informe um número para o campo idade';
    header('location: index.php');
    return;
}
//var_dump($nome); //retorna  tipo e valor
//var_dump($idade);

if($idade >= 0 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
        header('location: index.php');
    }
}
else if ($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
        header('location: index.php');
    }

}
else {
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
        header('location: index.php');
    }
}
?>