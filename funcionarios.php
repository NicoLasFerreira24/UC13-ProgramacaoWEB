<?php

$listaFuncionarios = [
    [
        "ID" => 1,
        "Nome" => "Nicolas Ferreira",
        "Email" => "nicolasteste@hot.com",
        "Telefone" => "(14) 988129678"
    ],
    [
        "ID" => 2,
        "Nome" => "Pedro Henrique",
        "Email" => "pedroteste@hot.com",
        "Telefone" => "(14) 988128678"
    ],
    [
        "ID" => 3,
        "Nome" => "Gustavo Messias",
        "Email" => "gustavoteste@hot.com",
        "Telefone" => "(14) 987129699"
    ],
    [
        "ID" => 4,
        "Nome" => "Luan Aziani",
        "Email" => "luanteste@hot.com",
        "Telefone" => "(14) 977129665"
    ],

];

$qtdeFuncionario = count($listaFuncionarios); // Função para verificar quantos itens tem dentro da ARRAY


// Adicioando um item no Array pronto
$listaFuncionarios[$qtdeFuncionario]["ID"] = 5;
$listaFuncionarios[$qtdeFuncionario]["Nome"] = "Luis Felipe";
$listaFuncionarios[$qtdeFuncionario]["Email"] = "luisteste@hot.com";
$listaFuncionarios[$qtdeFuncionario]["Telefone"] = "(14) 988557888";


//var_dump($listaFuncionarios) Comando para depuração