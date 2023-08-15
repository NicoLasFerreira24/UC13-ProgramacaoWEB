<?php

$nome = "Nicolas Ferreira";
$email = "nicolas.ferreira@hot.com";
$senha = "123456789";
$idade = 24;

echo "<h1>Estrutura Condicional</h1>";
echo "<hr>";

// <hr> Régua/Linha

//////////////////////////////////////////////

echo "<h5>Exemplo de if()<h5>";

if($idade >= 18)
{
    echo "O usuário $nome é maior de idade ";
}

echo "<hr>";


//////////////////////////////////////////////

echo "<h5> Exemplo de if e else <h5>";

if($senha == 123456789)
{
    echo "Senha válida! ";
}
else
{
    echo "Senha Inválida! ";
}

echo "<hr>";


//////////////////////////////////////////////

echo "<h5> Exemplo de if e elseif else <h5>";

if($idade <= 18)
{
    echo "Jovem";
}
else if($idade <= 21)
{
    echo "Adulto";
}
else
{
    echo "Velho";
}

echo "<hr>";


//////////////////////////////////////////////

echo "<h5> Exemplo de if Ternario <h5>";

echo ($idade >= 18) ? "Maior de Idade" : "Menor de Idade";

echo "<hr>";


//////////////////////////////////////////////

echo "<h5> Exemplo de condição para formulário de login <h5>";

if($email == "nicolas@teste.com" && $senha == "12345678")
{
    echo "Usuário Autenticado! ";
}
else
{
    echo "Usuário ou senha Inválido! ";
}

echo "<hr>";


//////////////////////////////////////////////

echo "<h5> Verificar se o numero é par ou ímpar <h5>";

$numero = 10;

// O numero 10 é par

if($numero %2 == 0 )
{
   echo "O $numero é par";
}
else
{
    echo "O $numero é impar";
}


echo "<hr>";


//////////////////////////////////////////////

echo "<h5> Mostre o dia da Semana <h5>";

$diaSemana = date('w');

if($diaSemana == 0)
{
    echo "Hoje é Domingo";
}
else if($diaSemana == 1)
{
    echo "Hoje é Segunda-Feira";
}
if($diaSemana == 2)
{
    echo "Hoje é Terça-Feira";
}