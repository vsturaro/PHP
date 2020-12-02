<?php

function validaNome(string $nome) : bool
{
    if (empty($nome)) //verifica para não ser vazio
    {
        setarMensagemErro('O nome não pode ser vazio tente novamente');
        return false;

    } else if (strlen($nome) < 3) //verifica qtde de caracteres
    {
        setarMensagemErro('O nome deve ter pelo menos 3 caracteres tente novamente');
        return false;
    } else if (strlen($nome) > 40) //verifica qtde de caracteres
    {
        setarMensagemErro('O nome não pode ter mais de 40 caracteres tente novamente');
        return false;
    }
        return true;
}
    function validaIdade(string $idade) : bool
    {
        if(!is_numeric($idade))
        {
            setarMensagemErro('Informe um número para idade');
            return false;
        }
        return true;
    }
?>