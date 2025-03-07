<?php

require_once "conexao.php";

$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$peso=$_POST['peso'];
$dtNascimento=$_POST['dtNascimento'];

$sqlInsertUser = "INSERT INTO Aluno (nome, sexo, peso, data_nascimento) "
                ." VALUE ('{$nome}','{$sexo}',{$peso},'{$dtNascimento}')";

if($conn->prepare($sqlInsertUser)->execute()){
    echo "Usuário cadastrado com sucesso!";
}else{
    echo "Erro ao cadastrar o usuário!";
}

echo '<br/><a href="index.php">Voltar</a>';