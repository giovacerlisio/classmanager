<?php

include 'connessionedb.php';

$sql = "SELECT * FROM assegno";

$rows = $conn->query($sql);

while($row = $rows->fetch(PDO::FETCH_ASSOC)){
    echo "Assegno: ".$row['assegno']."</br>";
    echo "Data: ".$row['data']."</br>";
    echo "Materia ".$row['materia']."</br>";
}



?>