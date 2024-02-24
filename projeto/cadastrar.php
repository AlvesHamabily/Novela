<?php
    include("conexao.php");

    $nome_novela=$_POST["nome_novela"];
    $numero_capitulo=$_POST["numero_capitulo"];
    $data_primeiro_capitulo=$_POST["data_primeiro_capitulo"];
    $data_ultimo_capitulo=$_POST["data_ultimo_capitulo"];

   $sql="INSERT INTO TbNovela (nome_novela, numero_capitulo, data_primeiro_capitulo, data_ultimo_capitulo) 
    VALUES ('$nome_novela', '$numero_capitulo', '$data_primeiro_capitulo', '$data_ultimo_capitulo')";

    if(mysqli_query($conexao, $sql)){
        echo("<h1>Cadastro realizado com sucesso</h1>");
        
    }
    else{
        echo("Error:".$sql."<br>".mysqli_error($conexao));
    }
?>;
