<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome_fruta = $_POST["nome_fruta"];
        $preco_fruta = $_POST["preco_fruta"];

        if($nome_fruta == ""){
            echo "campo nome freuta não pode ser vazio";
            return;
        }
        if(strlen($nome_fruta) <3){
            echo "o nome da fruta tem que ter no minimo 3 caracteres";
            return;
        }

        if ($nome_fruta == "banana" && ($preco_fruta <=2 || $preco_fruta >= 5)){
            echo "o preço fora dos padroes" ;
            return;
        }


        echo "o nome da fruta é: " . $nome_fruta;
        echo "<br>";
        echo "o preço da fruta é: " . $preco_fruta;

    ?>
</body>
</html>