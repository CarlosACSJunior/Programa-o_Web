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
    $bicho = $_POST["animal"];
    $animais  = array(
        0 => array (
            "nomeAnimal" => "cachorro",
        ),
        1 => array (
            "nomeAnimal" => "gato",
        ),
        2 => array (
            "nomeAnimal" => "cavalo",  
        ),
    );
    $p = array_search($bicho,array_column($animais,"nomeAnimal"),true);
    if($p == ""){
        echo"animal não encontrado";
    }else{
        echo"animal pesquisado foi: ".$bicho;
    }
    ?>
</body>
</html>