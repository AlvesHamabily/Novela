<!DOCTYPE html>
<?php include("head.php") ?>


<body>
    <?php include("nav.php") ?>

    <?php
    include("conexao.php");

    $sql= "SELECT codigo, nome_novela, numero_capitulo, data_primeiro_capitulo, data_ultimo_capitulo FROM TbNovela";

    $resultado=mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado)){
        echo"<br><table class= 'table'><tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Capítulo</th>
            <th>1° Capítulo</th>
            <th>Ultimo Capítulo</th>
            </tr>";

        while($row=mysqli_fetch_assoc($resultado)){
            echo"<tr>
            <td>".$row['codigo']."</td>
            <td>".$row['nome_novela']."</td>
            <td>".$row['numero_capitulo']."</td>
            <td>".$row['data_primeiro_capitulo']."</td>
            <td>".$row['data_ultimo_capitulo']."</td>
            </tr>";
        }
        echo"</table>";
    }
    else{
        echo"Zero Resultados";
    }
    mysqli_close($conexao);
?>

<a href="index.php">Principal</a>
</body>
</html>