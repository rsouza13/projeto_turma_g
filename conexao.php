<?php
//Conexão com o Banco de Dados
try {
  $conn = new PDO("mysql:host=localhost;dbname=bd_turma_g", 'root', '');
} catch(PDOException $e) {
  echo "Falha de conexão: " . $e->getMessage();
}