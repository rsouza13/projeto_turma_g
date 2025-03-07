<?php


// COM PDO
//$c = new PDO('mysql:host=localhost;port=3306;dbname=bd_turma_g', 'root', '');
/*$sql = 'SELECT * FROM aluno';
echo '<pre>';
foreach ($c->query($sql) as $row) {
    print_r($row);
}*/


$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'bd_turma_g');

$result = mysqli_query($con, 'SELECT * FROM aluno');

echo '<pre>';
while($row=$result->fetch_array()){
    print_r($row);
}

