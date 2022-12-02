<?php

include 'conexao.php';

$Codigo = $_GET['Codigo'];
$consulta = "DELETE FROM cursos WHERE Codigo = $Codigo";

mysqli_query($conexao, $consulta);

header('Location: visualizar_curso.php');

?>