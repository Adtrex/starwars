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

    <main class="login-main">

        <div class="login-box">
            <p> Enter Star Ship </p>
            <form class="login-form" action="processregister.php" method="post">
                <input type="text" name="name" placeholder="John Doe" required> <br>
                <input type="email" name="email" placeholder="johndoe@gmail.com" required> <br>
                <input type="password" name="password" placeholder="password" required> <br>
                <button class="login" name="submit"> Register </button>
            </form>
            <p class="account-none">Have an account? <a href="/login.php">Login</a></p>
            
        </div>
            
    </main>
    

</body>
</html>