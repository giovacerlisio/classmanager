<?php

include 'connessionedb.php';

$sql = "SELECT * FROM voto";

$rows = $conn->query($sql);

while($row = $rows->fetch(PDO::FETCH_ASSOC)){
    echo "Voto: ".$row['voto']."</br>";
    echo "Data: ".$row['data']."</br>";
    echo "Materia: ".$row['materia']."</br>";
    echo "Username: ".$row['username']."</br>";
}



?>