<?php

class Emprestimo
{
    public $aluno;
    public $livro;
    public $dataRetirada;
    public $dataDevolucao;

    public function __construct($aluno, $livro, $dataRetirada, $dataDevolucao)
    {
        $this->aluno = $aluno;
        $this->livro = $livro;
        $this->dataRetirada = $dataRetirada;
        $this->dataDevolucao = $dataDevolucao;
    }

    public function getAluno()
    {
        return $this->aluno;
    }

    public function getLivro()
    {
        return $this->livro;
    }

    public function getDataRetirada()
    {
        return $this->dataRetirada;
    }

    public function getDataDevolucao()
    {
        return $this->dataDevolucao;
    }
}

$emprestimo = null;
$detalhesExibidos = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    if (isset($_POST['aluno']) && isset($_POST['livro']) && isset($_POST['dataRetirada']) && isset($_POST['dataDevolucao'])){

        $aluno = $_POST['aluno'];
        $livro = $_POST['livro'];
        $dataRetirada = $_POST['dataRetirada'];
        $dataDevolucao = $_POST['dataDevolucao'];

        $emprestimo = new Emprestimo($aluno, $livro, $dataRetirada, $dataDevolucao);
        $detalhesExibidos = true;
    }
}
?>

<!DOCTYPE html>
<html lang= "pt-br">

<head>

    <meta charset="utf-8">

    <title>Emprestimo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 5px;
            padding: 20px;
            background-color: #F5FFFA;
        }
    </style>

</head>

<body>

    <div class="form-container">

        <h1>Emprestimo</h1>

        <form method="post">

            <label for="aluno">Digite nome do Aluno:</label><br>
            <input type="text" id="aluno" name="aluno" required><br>
            <label for="livro">Digite o título do Livro:</label><br>
            <input type="text" id="livro" name="livro" required><br>
            <label for="dataRetirada">Data de Retirada:</label><br>
            <input type="date" id="dataRetirada" name="dataRetirada" required><br>
            <label for="dataDevolucao">Data de Devolução:</label><br>
            <input type="date" id="dataDevolucao" name="dataDevolucao" required><br>
            <button type="submit">Cadastrar</button>

        </form>

    </div>

    <?php 

    if ($detalhesExibidos) {
        echo '<div class="emprestimo-details">';
        echo '<h2>Detalhes do Empréstimo:</h2>';
        echo '<b>Nome do Aluno:</b> ' . $emprestimo->getAluno() . '<br>';
        echo '<b>Título do Livro:</b> ' . $emprestimo->getLivro() . '<br>';
        echo '<b>Data de Retirada:</b> ' . $emprestimo->getDataRetirada() . '<br>';
        echo '<b>Data de Devolução:</b> ' . $emprestimo->getDataDevolucao() . '<br>';
        echo '</div>';
    }
    ?>
    
</body>

</html>

