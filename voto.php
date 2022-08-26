<?php
include 'connessionedb.php';

echo "<br>";

$sql = "INSERT INTO voto (`voto`,`data`,`materia`,`username`) 
        VALUES ('".$_POST["voto"]."','".$_POST["data"]."','".$_POST["materia"]."','".$_POST["username"]."')";


$conn->exec($sql);
header("Location: loginokprof.php");
?>