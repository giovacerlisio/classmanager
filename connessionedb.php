<?php
//Creo la connessione al DB
//Useremo php pdo
$server = "localhost";
$DBName = "classmanager";
$username = "root";
$password = "";
$charset = "utf8mb4";

try{
    $conn = new PDO("mysql:host=$server;dbname=$DBName;charset=$charset", $username, $password);
    //Attivo gli errori sulla connessione
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOExeption $e){
    echo $e->getMessage();
}

?>
