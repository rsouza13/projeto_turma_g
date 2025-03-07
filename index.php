<?php

require_once "conexao.php";

$stmt = $conn->prepare("SELECT * FROM Aluno");
$stmt->execute();

// set the resulting array to associative
$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Turma G</title>
    <link rel="stylesheet" href="assets/style.css" />
    <script type="text/javascript" src="assets/script.js"></script>
</head>
<body>
    <h1>Mini-projeto Turma G</h1>
    <p><a href="cadastroAluno.html">Novo Aluno</a></p>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Data Nascimento</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Ações</th>
        </tr>
        <?php
            while($aluno = $stmt->fetch()){
                echo '<tr>';
                echo '    <td>'.$aluno["id"].'</td>';
                echo '    <td>'.$aluno["nome"].'</td>';
                echo '    <td>'.$aluno["sexo"].'</td>';
                echo '    <td>'.$aluno["data_nascimento"].'</td>';
                echo '    <td>'.$aluno["peso"].'</td>';
                echo '    <td>'.$aluno["altura"].'</td>';
                echo '    <td>';
                echo '      <button onclick="digaOI(\''.$aluno["nome"].'\')">Oi</button>';
                echo '      <a href="deletaAluno.php?idUsuario='.$aluno["id"].'">Excluir</a>';
                echo '      <button onclick="calcularIdade(\''.$aluno["data_nascimento"].'\')">Calcular Idade</button>';
                echo '      <button onclick="calcularIMC('.$aluno["peso"].', '.$aluno["altura"].')">Calcular IMC</button>';
                echo '    </td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>