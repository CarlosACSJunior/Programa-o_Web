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
        $first_name = $_POST["nome"];
        $last_name = $_POST["sobrenome"];
        $Email = $_POST["email"];
        $sexo = $_POST["sexo"];
        echo "você enviou as seguintes informações ";
        echo "<br>";
        echo "Nome: ".$first_name;
        echo "<br>";
        echo "Sobrenome: ".  $last_name;
        echo "<br>";
        echo "Email: ".$Email;
        echo "<br>";
        echo "Sexo: ".$sexo;
    ?>  
</body>
</html>