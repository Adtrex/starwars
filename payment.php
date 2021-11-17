<?php
include_once('access.php');

if($row == NULL) {

}else{
    header("Location: /dashboard");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Star Wars</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php"><img src="img/logo.png"></a>
            </div>
        </nav>
    </header>

    <main>
            
            <div class="button">
                <form action="payment/initialize.php" method="POST">
                   <button class="register" type="submit" name="submit">Pay to access</button>
                </form>
                
            </div>
    </main>
    

</body>
</html>
