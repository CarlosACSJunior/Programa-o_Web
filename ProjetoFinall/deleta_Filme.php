<?php

require('connect.php');


$id = $_GET["id"];
$sql = "delete from filme where id = " . $id;

mysqli_query($con,$sql);

mysqli_close($con);

header('Location: lista_Filme.php');


?>