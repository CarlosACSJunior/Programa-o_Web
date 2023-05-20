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
    $id = $_GET["id"];
    $nome = $_GET["nome"];
    echo "o id via get é: " . $id;
    echo "<br>";
    echo "o nome é: ". $nome;
    ?>    

</body>
</html>