<?php

class Livro {

    private $autor;
    private $isbn;
    private $numeroPagina;
    private $anoPublicado;
    private $titulo;
    private $valor;

    public function getAutor() {
        return $this->autor;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getNumeroPagina() {
        return $this->numeroPagina;
    }

    public function getAnoPublicado() {
        return $this->anoPublicado;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getValor() {
        return $this->valor;
    }

    public function __construct($autor, $isbn, $numeroPagina, $anoPublicado, $titulo, $valor) {
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->numeroPagina = $numeroPagina;
        $this->anoPublicado = $anoPublicado;
        $this->titulo = $titulo;
        $this->valor = $valor;
    }
}

$livro = null;

if (isset($_POST['autor']) && isset($_POST['isbn']) && isset($_POST['numeroPagina']) && isset($_POST['anoPublicado']) && isset($_POST['titulo']) && isset($_POST['valor'])) {
    
    $autor = $_POST['autor'];
    $isbn = $_POST['isbn'];
    $numeroPagina = $_POST['numeroPagina'];
    $anoPublicado = $_POST['anoPublicado'];
    $titulo = $_POST['titulo'];
    $valor = $_POST['valor'];
    $livro = new Livro($autor, $isbn, $numeroPagina, $anoPublicado, $titulo, $valor);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
        <title>Cadastro de Livro</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 5px;
            padding: 20px;
            background-color: #F4F4F4;
        }
    </style> 

</head>

<body>

    <div class = "form-container">

        <!-- Campos para preencher o formulário -->

        <h2>Cadastro de Livro</h2>

        <form method = "post">

            <label for = "titulo">Titulo:</label><br>
            <input type = "text" id = "titulo" name = "titulo" required><br>
            <label for = "autor">Autor:</label><br>
            <input type = "" id = "autor" name = "autor" required><br>
            <label for = "numeroPagina">Numero de paginas:</label><br>
            <input type = "tel" id = "numeroPagina" name = "numeroPagina" required><br>
            <label for = "anoPublicado">Ano Publicado:</label><br>
            <input type = "text" id = "anoPublicado" name = "anoPublicado" required><br>
            <label for = "isbn">ISBN:</label><br>
            <input type = "tel" id = "isbn" name = "isbn" required><br>
            <label for = "valor">Preço:</label><br>
            <input type = "text" inputmode = "decimal" step = "1" id = "valor" name = "valor" required><br>

            <button type = "submit">Cadastrar</button>

        </form>

    </div>

    <?php if($livro): ?>
          
        <div class = "form-container">

            <!-- Conteúdo do formulário aqui -->

            <h2>Dados do Livro Cadastrado:</h2>

            <p><strong>Titulo:</strong> <?= $livro->getTitulo() ?></p>
            <p><strong>Autor:</strong> <?= $livro->getAutor() ?></p>
            <p><strong>Numero de Paginas:</strong> <?= $livro->getNumeroPagina() ?></p>
            <p><strong>Ano Publicado:</strong> <?= $livro->getAnoPublicado() ?></p>
            <p><strong>ISBN:</strong> <?= $livro->getIsbn() ?></p>
            <p><strong>Valor:</strong> <?= $livro->getValor() ?></p>

        </div>

    <?php endif; ?>   

</body