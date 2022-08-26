<?php
include 'connessionedb.php';

echo "<br>";

$sql = "INSERT INTO assegno (`assegno`,`data`,`materia`) 
        VALUES ('".$_POST["assegno"]."','".$_POST["data"]."','".$_POST["materia"]."')";


$conn->exec($sql);
header("Location: loginokprof.php");
?>