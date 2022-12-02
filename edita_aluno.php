<?php

include 'conexao.php';

$id = $_POST['ID'];
$nome = $_POST['Nome'];
$idade = $_POST['Idade'];
$altura = $_POST['Altura'];
$escolaridade = $_POST['Escolaridade'];

$consulta = "UPDATE alunos SET Nome = '$nome', Idade = $idade, Altura = $altura, Escolaridade = '$escolaridade' WHERE ID = $id";

mysqli_query($conexao, $consulta);

header('location: visualizar_aluno.php');
?>