<?php

    include 'conexao.php';

    $cod_aluno = $_POST['escolha_aluno'];
    $cod_curso = $_POST['escolha_curso'];

    $consulta = "INSERT INTO matricula (cod_aluno, cod_curso)
                            VALUES  ($cod_aluno, $cod_curso)";

    mysqli_query($conexao, $consulta);

    header('location: ver_matricula.php');

?>