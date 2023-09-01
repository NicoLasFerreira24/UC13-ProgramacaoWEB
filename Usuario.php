<?php

class Usuario{

    private $aluno;
    private $email;
    private $senha;
    private $perfil;

    public function __construct($aluno, $email, $senha, $perfil)
    {
       
        $this->aluno = $aluno;
        $this->email = $email;
        $this->senha = $senha;
        $this->perfil = $perfil;

    }

    public function getAluno()
    {
        return $this->aluno;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getPerfil()
    {
        return $this->perfil;
    }

}

if (isset($_POST['aluno']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['perfil'])){
    
    $nomeAluno = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['senha'];
    $cpf = $_POST['perfil'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    
    <title>Cadastro de Usuário</title>

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


        <h4>Cadastro de Usuário</h4>

        <form method = "post">

            <label for = "nome">Digite seu Nome:</label><br>
            <input type = "text" id = "nome" name = "nome" required><br>
            <label for = "email">Email:</label><br>
            <input type = "email" id = "email" name = "email" required><br>
            <label for = "Senha">Senha:</label><br>
            <input type = "text" id = "senha" name = "senha" required><br>
            <label for = "cpf">CPF:</label><br>
            <input type = "text" id = "cpf" name = "cpf" required><br>
            <label for = "perfil">Perfil:</label><br>
            <input type = "radio" id = "perfil" name = "perfil" value = "aluno">
            <label for = "perfil1">Aluno</label><br>
            <input type = "radio" id="perfil1" name = "perfil" value = "administrativo">
            <label for = "perfil1">Administrativo</label><br>
            <input type = "submit" value = "Cadastrar" onclick ="exibirMensagem()">

         </form>

    </div>

</body>    