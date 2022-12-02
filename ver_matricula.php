<html>
    <head>
        <meta charset="UTF-8">
    <head>
    <body>
        <table style="border: 2px solic #ccc">
            <thead>
                <th>Nome do aluno:</th>
                <th>Nome do curso:</th>
            </thead>

            <tbody>
                <?php
                    include 'conexao.php';
                    $consulta = "SELECT alunos.Nome, cursos.Nome_Curso, matricula.cod_mat
                                FROM alunos, cursos, matricula
                                WHERE alunos.ID = matricula.cod_aluno
                                AND cursos.Codigo = matricula.cod_curso";

                    $consulta_matricula = mysqli_query($conexao, $consulta);
                    while($linha = mysqli_fetch_array($consulta_matricula)){
                        echo '<tr><td>' . $linha['Nome'] . '</td>';
                        echo '<td>' . $linha['Nome_Curso'] . '</td>';
                    ?>

                    <td><a href="deleta_matricula.php?cod_mat=<?php echo $linha['cod_mat']; ?>">
                        <input type="submit" value="DELETAR">
                    </a></td></tr>

                    <?php
                        }
                    ?>
            </tbody>
        </table>
    </body>
</html>