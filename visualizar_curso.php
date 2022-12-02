<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Cursos</title>
</head>
<body>
    <table style="border: 2px solid #ccc">
        <thead>
            <tr>
                <th>Nome do curso</th>
                <th>Area</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        
    </thead>

    <tbody>

    <?php

    include 'conexao.php';

    // seleciona os dados no banco
$consulta = "SELECT * FROM cursos";
$consulta_cursos = mysqli_query($conexao, $consulta);

    //Laço que percorrer o banco de transformar os dados em vetor
    while($linha = mysqli_fetch_array($consulta_cursos)){
        echo '<tr><td border: 1px solid #ccc;>' . $linha['Nome'] . '</td>';
        echo '<td>' . $linha['Area'] . '</td>';
    ?>

<td><a href="curso.php?edita=<?php echo $linha['Codigo']; ?>">
        <input type="submit" value="EDITAR"/>
    </a>
    </td>

<td><a href="deleta_curso.php?Codigo=<?php echo $linha['Codigo']; ?>">
        <input type="submit" value="DELETAR"/>
    </a></td></tr>

    <?php
    }
    ?>
    </tbody>
    </table>

    <button><a href="curso.php"> Voltar</a></button>
</body>
</html>