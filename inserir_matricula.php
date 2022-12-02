<html>
    <head>
        <meta charset="UTF-8">
    <head>
        <body>
            <form method="POST" action="processa_matricula.php">
                <select name="escolha_aluno">
                    <option>Selecione um Aluno:</option>
                    <?php
                        include 'conexao.php';
                        $consulta = "SELECT * FROM alunos";
                        $consulta_aluno = mysqli_query($conexao, $consulta);
                        while($linha = mysqli_fetch_array($consulta_aluno)){
                            echo '<option value="'. $linha['ID'] . '">' .
                                $linha['Nome'] .'</option>';
                        }
                    ?>
                </select>

                </br></br></br>

                <select name="escolha_curso">
                    <option>Selecione um Curso:</option>
                    <?php
                        include 'conexao.php';
                        $consulta = "SELECT * FROM  cursos";
                        $consulta_curso = mysqli_query($conexao, $consulta);
                        while($linha = mysqli_fetch_array($consulta_curso)){
                            echo '<option value="'. $linha['Codigo'] . '">' .
                                $linha['Nome_Curso'] .'</option>';
                        }
                    ?>
                </select>
                </br></br>
                <input type="submit" value="CADASTRAR MATRÍCULA">
            </form>
        </body>
</html>
    <!-- mysqli_query => vai tentar conectar com o banco, e vai passar o paremetro de uma consulta(vai tentar estabelecer uma conexao e uma consulta ao mesmo tempo)
        mysqli_fetch_arrray =>  vai pegar os dados do banco a vai transformar e um vetor (pega todos os dados do banco e tranforma em um array)
