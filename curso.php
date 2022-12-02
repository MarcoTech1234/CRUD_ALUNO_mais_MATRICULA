<!doctype html>
<html lang="pt-br">
    <head>
    <title>Cursos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

    <?php
if (!isset($_GET['edita'])){
?>

    <form method="POST" action="adiciona_curso.php">

    <h3>Cadastramento de Cursos</h3></br>
        
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu Nome"> </br></br>

        <label>Area:</label>
        <input type="text" name="area" placeholder="Digite a area do curso"> </br></br>

        <label>Descrição:</label>
        <input type="text" name="descricao" placeholder="Digite uma descrição"> </br></br>

        <label>Carga Horária:</label>
        <input type="number" name="carga_horaria" placeholder="Digite a carga horária"> </br></br>

        <input type="submit" value="Cadastrar"> </br></br>
    </form>

    <?php }else{ ?>
<?php include 'conexao.php';            
    $consulta = "SELECT * FROM cursos";
    $consulta2 = mysqli_query($conexao, $consulta);

    while($linha = mysqli_fetch_array($consulta2)){ ?>
    <?php if($linha['Codigo'] == $_GET['edita']){ ?>

    <form method="POST" action="edita_curso.php">

<h3>Editar Curso</h3></br>

<input type="hidden" name="Codigo" value="<?php echo $linha['Codigo']; ?>"/>

        <label>Nome:</label>
        <input type="text" name="Nome" value="<?php echo $linha['Nome']; ?>"> </br></br>

        <label>Area:</label>
        <input type="text" name="Area" value="<?php echo $linha['Area']; ?>"> </br></br>

        <label>Descrição:</label>
        <input type="text" name="Descricao" value="<?php echo $linha['Descricao']; ?>"> </br></br>

        <label>Carga Horária:</label>
        <input type="number" name="Carga_Horaria" value="<?php echo $linha['Carga_Horaria']; ?>"> </br></br>

    <input type="submit" value="Editar"> </br></br>
    </form>

    <?php } ?>  <!--FECHA CHAVE DO IF-->
            <?php } ?> <!--FECHA CHAVE DO WHILE-->
        <?php } ?> <!--FECHA CHAVE DO ELSE-->
    </body>
</hmtl>