<?php
include_once('../access.php');

if($row == NULL) {
    header("Location: payment.php");
  } else {
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="../index.php"><img src="../img/logo.png"></a>
            </div>

            <ul id="links">
                <li id="films">Films</li>
                <li id="people">People</li>
                <li id="planets">Planets</li>
                <li id="species">Species</li>
                <li id="starships">Starships</li>
                <li id="vehicles">Vehicles</li>
            </ul>
        </nav>
    </header>

    <main>
            <div class="container" id="items">

                

            </div>
            
    </main>
    
<script src="stars.js"></script>
</body>
</html>
