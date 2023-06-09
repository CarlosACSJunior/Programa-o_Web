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
    echo "<table border = '1' />";
        echo "<tr><td>ID</td><td>Nome</td><td>Idade</td><td>Ação</td></tr>"; 
        while($row = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>" .$row["id"] ."</td>";
            echo "<td>". $row["nome"] . "</td> "; 
            echo "<td>". $row["idade"] . "</td>";
            echo "<td>< a href ='deletar_aluno.php?id=.$row["id"]."'> <img width=15 height=15>src='download.png'/></a></td>";
            echo "</tr>";
            }
    echo "</table>";
mysqli_close($conn);

?>