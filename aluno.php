<!doctype html>
<html lang="pt-BR">
<head>
    <title>Alunos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
if (!isset($_GET['edita'])){
?>
    <form method="POST" action="adiciona_aluno.php">

    <h3>Cadastramento de Alunos</h3></br>
        
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu Nome"> </br></br>

        <label>Idade:</label>
        <input type="number" name="idade" placeholder="Digite sua Idade"> </br></br>

        <label>Altura:</label>
        <input type="text" name="altura" placeholder="Digite sua Altura"> </br></br>

        <label>Escolaridade:</label>
        <input type="text" name="escolaridade" placeholder="Digite sua Escolaridade"> </br></br>

        <input type="submit" value="Cadastrar"> </br></br>
    </form>

    <?php }else{ ?>
<?php include 'conexao.php';            
    $consulta = "SELECT * FROM alunos";
    $consulta2 = mysqli_query($conexao, $consulta);

    while($linha = mysqli_fetch_array($consulta2)){ ?>
    <?php if($linha['ID'] == $_GET['edita']){ ?>

    <form method="POST" action="edita_aluno.php">

<h3>Editar Aluno</h3></br>

    <input type="hidden" name="ID" value="<?php echo $linha['ID']; ?>" />
    <label>Nome:</label>
    <input type="text" name="Nome" value="<?php echo $linha['Nome'];?>"> </br></br>

    <label>Idade:</label>
    <input type="text" name="Idade" value="<?php echo $linha['Idade'];?>"> </br></br>

    <label>Altura:</label>
    <input type="text" name="Altura" value="<?php echo $linha['Altura'];?>"> </br></br>

    <label>Escolaridade:</label>
    <input type="text" name="Escolaridade" value="<?php echo $linha['Escolaridade'];?>"> </br></br>

    <input type="submit" value="Editar"> </br></br>
    </form>

    <?php } ?>  <!--FECHA CHAVE DO IF-->
            <?php } ?> <!--FECHA CHAVE DO WHILE-->
        <?php } ?> <!--FECHA CHAVE DO ELSE-->
    </body>
</hmtl>