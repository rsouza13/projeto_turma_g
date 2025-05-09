<?php

require_once "conexao.php";

$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$peso=$_POST['peso'];
$dtNascimento=$_POST['dtNascimento'];
$foto=$_FILES['foto']['name'];

move_uploaded_file($_FILES['foto']['tmp_name'], './fotos/'.$foto);

$sqlInsertUser = "INSERT INTO Aluno (nome, sexo, peso, data_nascimento, foto) "
                ." VALUE ('{$nome}','{$sexo}',{$peso},'{$dtNascimento}','{$foto}')";

if($conn->prepare($sqlInsertUser)->execute()){
    echo "Usuário cadastrado com sucesso!";
}else{
    echo "Erro ao cadastrar o usuário!";
}

echo '<br/><a href="index.php">Voltar</a>';