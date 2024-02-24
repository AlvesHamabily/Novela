<!DOCTYPE html>
<?php include("head.php") ?>
<body>
    <?php include("nav.php") ?>
    <h1>Formulário para cadastrar Novelas</h1>
    <fieldset>
    <form action="cadastrar.php" method="post">
        <label for="">Nome: </label>
        <input type="text" name="nome_novela" id="nome_novela"><br><br>

        <label for="">Número do Capitulo: </label>
        <input type="number" name="numero_capitulo" id="numero_capitulo"><br><br>

        <label for="">Data do 1° Capítulo: </label>
        <input type="date" name="data_primeiro_capitulo" id="data_primeiro_capitulo"><br><br>

        <label for="">Data do Ultimo Capítulo: </label>
        <input type="date" name="data_ultimo_capitulo" id="data_ultimo_capitulo"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</fieldset>
<br>
<a href="index.php">inicio</a><br>
<a href="cadastro.php">cadastro</a><br>
<a href="pesquisa.html">pesquisa</a><br>

</body>
</html>