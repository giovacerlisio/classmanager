<?php

$db = mysqli_connect('localhost', 'root', '', 'classmanager');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
$result= mysqli_query($db, $sql);
$conta= mysqli_num_rows($result);

if($conta==1){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("Location: loginok.php");
} else {
    echo "Identificazione non riuscita";
}

?>