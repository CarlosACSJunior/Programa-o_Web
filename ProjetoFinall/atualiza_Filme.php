<?php

require('connect.php');


$id = $_POST["id"];
$Nome = $_POST["nome"];
$Diretor = $_POST["diretor"];
$Atorprincipal = $_POST["atorprincipal"];
$Atorcoadjuvante= $_POST["atorcoadjuvante"];
$Anodelancamento = $_POST["anodelancamento"];

$sql = "update filme set nome = '" . $Nome . "',
 diretor = '" . $Diretor . "',
 atorprincipal = '". $Atorprincipal . "',
 atorcoadijuvante = '".$Atorcoadjuvante."',
 anodelancamento = '" . $Anodelancamento . "'
 where id = " . $id;
mysqli_query($con,$sql);

mysqli_close($con);

header('Location: lista_Filme.php');


?>