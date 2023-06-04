<?php
$server = "localhost";
$db = "aula";
$user = "root";
$senha = "";

$conn = mysqli_connect($server,$user,$senha,$db );

if (! $conn){
    die("erro ao conectar no banco de dados" . mysqli_connect_error());
}

//echo "conectado com secesso no banco de dados";
$sql = "select * from aluno";
$query = mysqli_query($conn,$sql)
    or die (mysqli_error($conn));
while($row = mysqli_fetch_array($query)){
    echo $row["id"] . " " . $row["nome"] . " " . 
    $row["idade"] . "</br>" ;
}





mysqli_close($conn);

?>