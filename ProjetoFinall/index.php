<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php" >
    <title>Cadastre seu filme favorito</title>
</head>
<body>


    <?php
    
    
    if(isset($_GET["id"])){

        require('connect.php');
        
        $sql = "select * from filme where id = " .$_GET["id"];
        
        $query = mysqli_query($con, $sql)
                     or die ();
         
        $Nome;
        $Diretor;
        $Atorprincipal;
        $Anodelancamento;                    
        while($linha = mysqli_fetch_array($query)){
            $Nome = $linha["nome"]  ;
            $Diretor = $linha["diretor"] ;
            $Atorprincipal = $linha["atorprincipal"];
            $Anodelancamento = $linha["anodelancamento"];                    
        }
        
        mysqli_close($con);

    echo " <h1>Nesta página você atualiza o cadastro do seu filme Preferido</h1>";
    echo "<form action='atualiza_Filme.php' method='post'>";
    echo "Nome do filme: <input type='text' name='nome' value='" . $Nome ."'/><br>";
    echo "Nome do Diretor: <input type='text' name='diretor'value='" . $Diretor ."'/><br>"; 
    echo "Nome do ator Principal: <input type='text' name='atorprincipal'value='" . $Atorprincipal ."'/><br>";           
    echo "Ano de lançamento: <input type='text' name='anodelancamento'value='" . $Anodelancamento ."'/><br>";
    echo "<input type = 'submit' value='atualizar'/>";
    echo "<input type='hidden' name='id' value='". $_GET["id"] . "'/>";
    echo "</form>";
    }else{      
        
    echo "<h1>Nesta página você cadastra seu filme Preferido</h1> ";
    echo "<form action='cadastro_Filme.php' method='post'>";
    echo "Nome do filme: <input type='text' name='nome'/><br>";
    echo "Nome do Diretor: <input type='text' name='diretor'/><br>";
    echo "Nome do ator Principal: <input type='text' name='atorprincipal'/><br>";
    echo "Ano de lançamento: <input type='text' name='anodelancamento'/><br>";
    echo "<input type = 'submit' value='Cadastrar' onclick='return tudook'/>";
    echo "</form>";
    }

    ?>  
    <a href="lista_Filme.php">lista de filmes cadastrados</a>

    
</body>
</html>