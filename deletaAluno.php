<?php
require_once "conexao.php";

if(isset($_GET['idUsuario'])){
    $sqlDeleteUser = "DELETE FROM Aluno WHERE id=".$_GET['idUsuario'];
    $stmDel = $conn->prepare($sqlDeleteUser);
    $stmDel->execute();
    if($stmDel->rowCount() > 0){
        echo "Usuário excluído com sucesso!";
    }else{
        echo "Id do usuario não localizado para excluir!";
    }
}else{
    echo 'Precisa informar o ID do usuário na URL';
}

echo '<br/><a href="index.php">Voltar</a>';
