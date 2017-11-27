<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Instragram</title>
</head>
<body>
<header>
    <div class="header">
        <img src="Instagram-logo.png" alt="instagram">
        <h1>Mennogram.</h1>
    </div>
</header>
<div id="wrapper">
    <div class="Menu">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a> </li>
                <li><a href="upload.php">Upload</a> </li>
            </ul>
        </nav>
    </div>

    <form id="regristreer" action="process_register.php" method="post">
<fieldset>
    <label for="loginnaam">Login naam:</label>
     <input type="text" required id="loginnaam" name="loginnaam" placeholder="Login naam" autofocus><br>

    <label for="wachtwoord">Wachtwoord:</label>
    <input type="password"  required id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord"><br>

    <label for="email">Email:</label>
    <input type="email"  required id="email" name="email" placeholder="Email"><br>


<input type="submit" name="submit" VALUE="Submit">
    <div class="gelukt">


    </div>

</fieldset>










    </form>




</div>
</body>
</html>