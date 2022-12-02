<?php

    include 'conexao.php';

    $cod_matricula = $_GET['cod_mat'];
    $consulta = "DELETE FROM matricula WHERE cod_mat = $cod_matricula";

    mysqli_query($conexao, $consulta);

    header('Location: ver_matricula.php');

?>