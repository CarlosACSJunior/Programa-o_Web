<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php" >
    <title>formulario</title>
</head>
<body>
    <script language="javascript" type="text/javascript">
        function tudook(){
            var Nome = document.getElementById("movie").value;
            var Diretor = document.getElementById("director").value;
            var Atorprincipal = document.getElementById("actor").value;
            var Atorcoadjuvante = document.getElementById("supporting").value;
            var Anodelancamento = document.getElementById("laucher").value;
                if (Nome == ""){
                    alert("Todos os campos devem ser preenchidos");
                    document.getElementById("movie").focus();
                    return false;
                }
                if (Diretor == ""){
                    alert("Todos os campos devem ser preenchidos");
                    document.getElementById("director").focus();
                    return false;
                }
                if (Atorprincipal == ""){
                    alert("Todos os campos devem ser preenchidos");
                    document.getElementById("actor").focus();
                    return false;
                }
                if (Atorcoadjuvante == ""){
                    alert("Todos os campos devem ser preenchidos");
                    document.getElementById("supporting").focus();
                    return false;
                }
                if (Anodelancamento == ""){
                    alert("Todos os campos devem ser preenchidos");
                    document.getElementById("laucher").focus();
                    return false;
                }
                else{ return true; }  
        }
    </script>

    <?php
    
    
    if(isset($_GET["id"])){

        require('connect.php');
        
        $sql = "select * from filme where id = " .$_GET["id"];
        
        $query = mysqli_query($con, $sql)
                     or die ();
         
        $Nome;
        $Diretor;
        $Atorprincipal;
        $Atorcoadjuvante;
        $Anodelancamento;                    
        while($linha = mysqli_fetch_array($query)){
            $Nome = $linha["nome"]  ;
            $Diretor = $linha["diretor"] ;
            $Atorprincipal = $linha["atorprincipal"];
            $Atorcoadjuvante = $linha["atorcoadijuvante"];
            $Anodelancamento = $linha["anodelancamento"];                    
        }
        
        mysqli_close($con);

    echo " <h1>Nesta página você atualiza o cadastro do seu filme Preferido</h1>";
    echo "<form action='atualiza_Filme.php' method='post'>";
    echo "Nome do filme:             <input type='text' name='nome'             Id ='movie'      value='" . $Nome ."'/><br>";
    echo "Nome do Diretor:           <input type='text' name='diretor'          Id ='director'   value='" . $Diretor ."'/><br>"; 
    echo "Nome do ator Principal:    <input type='text' name='atorprincipal'    Id ='actor'      value='" . $Atorprincipal ."'/><br>";
    echo "Nome do ator coadjuvante:  <input type='text' name='atorcoadjuvante'  Id ='supporting' value='" . $Atorcoadjuvante."'/><br>";           
    echo "Ano de lançamento:         <input type='text' name='anodelancamento'  Id ='laucher'    value='" . $Anodelancamento ."'/><br>";
    echo "<input type = 'submit' value='atualizar' onclick='return tudook()'/>";
    echo "<input type='hidden' name='id' value='". $_GET["id"] . "'/>";
    echo "</form>";
    }else{      
    echo "<h1>Nesta página você cadastra seu filme Preferido</h1> ";
    echo "<form action='cadastro_Filme.php' method='post'>";
    echo "Nome do filme:             <input type='text' name='nome'               Id ='movie' /><br>";
    echo "Nome do Diretor:           <input type='text' name='diretor'            Id ='director'/><br>";
    echo "Nome do ator Principal:    <input type='text' name='atorprincipal'      Id ='actor'/><br>";
    echo "Nome do ator coadjuvante:  <input type='text' name='atorcoadjuvante'    Id ='supporting'/><br>";
    echo "Ano de lançamento:         <input type='text' name='anodelancamento'    Id ='laucher'/><br>";
    echo "<input type = 'submit' value='Cadastrar' onclick='return tudook()'/>";
    echo "</form>";
    }
    ?>
    
    <a href="lista_Filme.php">lista de filmes cadastrados</a>
 
    

    
</body>
</html>