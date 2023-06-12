<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
       b{ color:red;
       }
    </style>
    <?php
    // comentario
    //browser
    echo "isso é hello ";
    echo "</br>";
    echo "<h1>titulo feito em php</h1>";
    $valor1 = 20;
    $valor2 = 30;
    $nome ="CJ";
    $soma = $valor1+$valor2;
    if($soma > 100){
        echo "<b>valor maior que ". "100";
    }
    else{
        echo "<b>valor menor que ". "100";
    }
    mostraNome($nome);
    
    function mostraNome($nome){
        echo"<br>".mostraNome($nome);
        }
    ?>
</body>
</html>