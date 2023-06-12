
<?php

require('connect.php');


$Nome = $_POST["nome"];
$Diretor = $_POST["diretor"];
$Atorprincipal = $_POST["atorprincipal"];
$Anodelancamento = $_POST["anodelancamento"];

$sql = "insert into filme (id,nome,diretor,atorprincipal,anodelancamento)
values (null,'".$Nome."','".$Diretor."','".$Atorprincipal."','".$Anodelancamento."')";

mysqli_query($con,$sql) ;

mysqli_close($con);

header('Location: lista_Filme.php');


?>