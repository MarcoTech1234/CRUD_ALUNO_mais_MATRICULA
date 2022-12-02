<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Alunos</title>
</head>
<body>
    <table style="border: 2px solid #ccc">
        <thead>
            <tr>
                <th>Nome do aluno</th>
                <th>Idade</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        
    </thead>

    <tbody>

    <?php

    include 'conexao.php';

    // seleciona os dados no banco
$consulta = "SELECT * FROM alunos";
$consulta_aluno = mysqli_query($conexao, $consulta);

    //Laço que percorrer o banco de transformar os dados em vetor
    while($linha = mysqli_fetch_array($consulta_aluno)){
        echo '<tr><td border: 1px solid #ccc;>' . $linha['Nome'] . '</td>';
        echo '<td>' . $linha['Idade'] . '</td>';
    ?>

    <td><a href="aluno.php?edita=<?php echo $linha['ID']; ?>">
        <input type="submit" value="EDITAR"/>
    </a>
    </td>

        <td><a href="deleta_aluno.php?ID=<?php echo $linha['ID']; ?>">
        <input type="submit" value="DELETAR"/>
    </a></td></tr>

    <?php
    }
    ?>
    </tbody>
    </table>

    <button><a href="aluno.php"> Voltar</a></button>
</body>
</html>