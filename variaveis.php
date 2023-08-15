<?php

$nomeCompleto = 'Nicolas Ferreira';
$idade = 24;
$status = true;
$salario = 1500.00;

echo $nomeCompleto;
echo "<hr>";

// Converte em tudo maisculo.
echo strtoupper($nomeCompleto);

// Pular linha
echo "<hr>";

// Converte um tudo minusculo.
echo strtolower($nomeCompleto);

echo "<hr>";

// Converte em maiscula a primeira letra de cada palavra.
echo ucwords($nomeCompleto);

echo "<hr>";

// Procura a palavra, altere, e depois a variavel que se encontra.
echo str_replace("Nicolas", "Nicholas", $nomeCompleto);

echo "<hr>";

// Repete a palavra, como se fosse um sistema de repetição.
echo str_repeat("Nicolas, ", 5);

echo "<hr>";

// Verifica de tem a variavel existe.
echo isset($nome) ? 'True' : 'False';

echo "<hr>";

// Verifica se tem algo existente dentro da variavel
echo empty($nome) ? 'True' : 'False';

echo "<hr>";

