<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Mennogram - Login</title>
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

<form id="login" action="" method="post">
<fieldset>
    <label for="loginnaam">Login naam:</label>
    <input type="text" id="loginnaam" name="loginnaam" placeholder="Login naam" autofocus><br>
    <label for="wachtwoord">Wachtwoord</label>
    <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord"><br><br>


<input type="submit" value="Submit">



</fieldset>
</form>
</body>
</html>