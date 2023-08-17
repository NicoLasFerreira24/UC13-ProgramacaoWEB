<?php

include "funcionarios.php";

?>

<html>

<head>
    <title>Lista de Funcionários</title>
</head>

<body>
    <h1>Lista de Funcionários</h1>

    <table border="1">
        <thread>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ação</th>
            </tr>
        </thread>

        <tbody>
            <?php foreach ($listaFuncionarios as $funcionario) : ?>
                <tr>
                    <th><?=$funcionario["ID"] ?></th>
                    <td><?=$funcionario["Nome"] ?></td>
                    <td><?=$funcionario["Email"] ?></td>
                    <td><?=$funcionario["Telefone"] ?></td>
                    <td>Editar Visualizar Excluir</td>
                </tr>
            <?php endforeach; ?>
        </tbody>

        <tfoot>
            <tr>
                <td colspan="5">Foi encontrado 5 funcionários cadastrados</td>
            </tr>
        </tfoot>

    </table>
</body>

</html>