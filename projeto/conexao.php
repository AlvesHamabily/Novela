<?php
    $servidor="Servidor";
    $usuario="Usuario";
    $senha="UserPassword";
    $dbname="Novela";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    } 
   