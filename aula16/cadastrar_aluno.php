<?php
$server = "localhost";
$db = "aula";
$user = "root";
$senha = "";

$conn = mysqli_connect($server,$user,$senha,$db );

if (! $conn){
    die("erro ao conectar no banco de dados" . 
    mysqli_connect_error());
}

$nome = $_POST["nome"];
$idade = $_POST["idade"];

$sql = "insert into aluno (id,nome,idade)
values (null,'".$nome."',".$idade.")";

mysqli_query($conn,$sql);

mysqli_close($conn);

header('location: listar_usuario.php');

?>