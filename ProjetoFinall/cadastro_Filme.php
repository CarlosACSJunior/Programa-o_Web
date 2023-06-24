
<?php

require('connect.php');


$Nome = $_POST["nome"];
$Diretor = $_POST["diretor"];
$Atorprincipal = $_POST["atorprincipal"];
$Atorcoadjuvante= $_POST["atorcoadjuvante"];
$Anodelancamento = $_POST["anodelancamento"];

$sql = "insert into filme (id,nome,diretor,atorprincipal,atorcoadijuvante,anodelancamento)
values (null,'".$Nome."','".$Diretor."','".$Atorprincipal."','".$Atorcoadjuvante."','".$Anodelancamento."')";

mysqli_query($con,$sql) ;

mysqli_close($con);

header('Location: lista_Filme.php');


?>