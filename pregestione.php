<?php
    session_start();
    if(!isset($_SESSION['username'])) {
    header("Location: errore.php");
    } 
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="form.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> <title>LOGIN PHP</title>
</head>
<body>
<div class="container">
      <form method="POST" action="assegna.php" autocomplete="on">

      <div class="logoform">
      <img src="gear-5384557_1280.png" alt="Logo Form" width="70" height="70">
    </div>

    		<div class="box">
          <label for="assegno" class="fl fontLabel"> Assegno </label>
    			<div class="new iconBox">
          </div>
    			<div class="fr">
    					<input type="text" name="assegno" placeholder="Assegno"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
        <div class="box">
          <label for="data" class="fl fontLabel"> Data: </label>
    			<div class="new iconBox">
          </div>
    			<div class="fr">
    					<input type="date" name="data" placeholder="Data"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
        <div class="box">
          <label for="materia" class="fl fontLabel"> Materia: </label>
    			<div class="new iconBox">
          </div>
    			<div class="fr">
    					<input type="text" name="materia" placeholder="Materia"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>



    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="Assegna">
    		</div>

      </form>
  </div>

  <div class="topnav">
        <a href="index.html"> 
            <img src="gear-5384557_1280.png" width="35px">
        </a>
        </div>


</body>
</html>