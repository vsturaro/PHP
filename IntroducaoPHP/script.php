<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias); imprime toda a array categorias

$nome = $_POST[nome] ;
$idade = $_POST[idade];
$newUrl = 'index.php';
if (empty($nome)) //verifica para não ser vazio
{
    echo "<script>alert('O campo nome não pode ser vazio!');</script>";
    return;

}
if (strlen($nome) < 3) //verifica qtde de caracteres
{
    echo "<script>alert('O nome deve ter mais que 3 caracteres!');</script>";
    return;
}
if (strlen($nome) > 40) //verifica qtde de caracteres
{
    echo "<script>alert('O nome dé muito extenso!');</script>";
    return;
}
if (!is_numeric($idade)) //(!) sever para negar o comando
{
    echo "<script>alert('Informe um número para a idade');</script>";
    return;
}
//var_dump($nome); //retorna  tipo e valor
//var_dump($idade);

if($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}
else if ($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }

}
else {
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
    }
}
?>