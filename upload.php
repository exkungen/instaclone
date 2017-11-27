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

        <form  enctype="multipart/form-data" action="upload.php" method="post">
            <fieldset>
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                <label for="image">Upload:</label>
                <input type="file"  name="image" placeholder="Upload" autofocus><br><br>
                 <textarea id="beschrijving" name="beschrijving" placeholder="Beschrijving" cols="50" rows="5"></textarea> <br><br>


                <input type="submit" name="submit" value="submit">
                <?php
                define('HOST','localhost');
                define('USER','exkungen');
                define('PASS','23136');
                define('DBNAME','23136_database');
                if(isset($_POST['submit']))   {
                    require_once('upload.php');
                    $dbc = mysqli_connect(HOST,USER,PASS,DBNAME) or die ('cant connect to the database');
                    $beschrijving = mysqli_real_escape_string($dbc,trim($_POST['beschrijving']));
                    $target = 'images/' . time() . $_FILES['image']['name'];
                    $temp = $_FILES['image']['tmp_name'];
                    if(!empty($beschrijving)) {
                        if(move_uploaded_file($temp,$target)){
                            echo '<br> Het uploaden is gelukt!';
                            echo '<br> Klik <a href="index.php">hier</a> om weer terug te gaan naar de home pagina! ';
                            $query = "INSERT INTO instaclone_images VALUES (0,NOW(),'$beschrijving','$target','menouer')";
                            $result = mysqli_query($dbc,$query) or die ('Kan niet verbinden');




                        }
                        else {
                            echo '<p> Je hebt geen beschrijving ingevuld, of het bestand is te groot :(</p>';
                        }
                    }
                }













                ?>


            </fieldset>
        </form>

</body>
</html>