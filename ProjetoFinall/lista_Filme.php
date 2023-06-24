<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php" >
    <title>Lista de filmes</title>
</head>
<body>
    <h1>Filmes já cadastrados</h1>
    <?php

    require('connect.php');

    $sql = "select * from filme";

    $query = mysqli_query($con, $sql)
                or die ();
                
    echo "<table border='1'>";         
    echo "<tr> <td>ID</td><td>Nome</td><td>Diretor</td><td>Ator Principal</td><td>Ator Coadjuvante</td><td>Ano de lançamento</td><td>Opções</td></tr>";
    while($linha = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>" . $linha["id"] . "</td>" ;
        echo "<td>" . $linha["nome"] . "</td>" ;
        echo "<td>" . $linha["diretor"] . "</td>" ;
        echo "<td>" . $linha["atorprincipal"] . "</td>" ;
        echo "<td>" . $linha["atorcoadijuvante"] . "</td>" ;
        echo "<td>" . $linha["anodelancamento"] . "</td>" ;
        echo "<td>
                <a href='deleta_Filme.php?id=".$linha["id"]."'> 
                    <img width=48 height=48 src='delete.png'/>
                </a>
                <a href='index.php?id=".$linha["id"]."'> 
                    <img width=48 height=48 src='update.png'/>
                </a>
            </td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);

    ?>

<a href="index.php">cadastro de filmes</a>
icon by <a target="_blank" href="https://icons8.com">Icons8</a>
</body>
</html>