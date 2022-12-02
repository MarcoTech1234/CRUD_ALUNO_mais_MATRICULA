<?php

include 'conexao.php';

$Codigo = $_POST['Codigo'];
$nome = $_POST['Nome'];
$area = $_POST['Area'];
$descricao = $_POST['Descricao'];
$carga_horaria = $_POST['Carga_Horaria'];

$consulta = "UPDATE cursos SET Nome = '$nome', Area = '$area', Descricao = '$descricao', Carga_Horaria = $carga_horaria WHERE Codigo = $Codigo";

mysqli_query($conexao, $consulta);

header('location: visualizar_curso.php');
?>