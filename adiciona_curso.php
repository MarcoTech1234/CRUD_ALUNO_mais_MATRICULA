<?php

include 'conexao.php';

$nome = $_POST['nome'];
$area = $_POST['area'];
$descricao = $_POST['descricao'];
$carga_horaria = $_POST['carga_horaria'];

$query = "INSERT INTO cursos(Nome, Area, Descricao, Carga_Horaria) VALUES ('$nome', '$area', '$descricao', $carga_horaria)";

mysqli_query($conexao, $query);

header('Location: visualizar_curso.php');

?>