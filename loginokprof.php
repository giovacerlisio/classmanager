<?php
    session_start();
    if(!isset($_SESSION['username'])) {
    header("Location: errore.php");
    }
    ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="loginokstudenti.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>classmanager.it</title>
    <link rel="shortcut icon" href="gear-5384557_1280.png" />
</head>
<body>
    <div class="testo">
	 <h1>Identificazione utente prof riuscita!</h1>
    <h2>Benvenuto nell'area riservata</h2>
    <h2 class="testowork">WORK IN PROGRESS..!!</h2> <br />
    <h1> premi su <a href="logout.php">Logout</a> per disconnetterti </h1>
</div>

<div class="topnav">
        <a href="index.html"> 
            <img src="gear-5384557_1280.png" width="24px">
        </a>
        <a href="pregestione.php">Assegna</a>
        <a href="prevoto.php">Voti</a>
        <a href="visualizzavoto.php">Visualizza</a>
        </div>


    <footer>
        <p>DEVELOPED BY GIOVANNI CERLISIO | COPYRIGHT RESERVED<br>
    </footer>
</body>
</html