<?php

include 'conexao.php';

$ID = $_GET['ID'];
$consulta = "DELETE FROM alunos WHERE ID = $ID";

mysqli_query($conexao, $consulta);

header('Location: visualizar_aluno.php');

?>
