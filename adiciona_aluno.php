<?php

include 'conexao.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$altura = $_POST['altura'];
$escolaridade = $_POST['escolaridade'];

$query = "INSERT INTO alunos(Nome, Idade, Altura, Escolaridade) VALUES ('$nome', $idade, $altura,'$escolaridade')";

mysqli_query($conexao, $query);

header('Location: visualizar_aluno.php');

?>