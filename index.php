<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <select name="sorteer">
        <option value="date_asc">Datum oplopend</option>
        <option value="date_desc">Datum aflopend</option>
        <option value="descr_asc">Beschrijving oplopend</option>
        <option value="descr_desc">Beschrijving Aflopend</option>
    </select>
    <input type="submit" name="submit_sort" value="Sorteren">




</form>

    <form method="post" action="<?php echo  $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="searchterm" placeholder="Zoekterm"/>
        <input type="submit" name="submit_search" value="zoeken">


    </form>
    <?php
    define('HOST','localhost');
    define('USER','exkungen');
    define('PASS','23136');
    define('DBNAME','23136_database');

    $column = 'date';
    $order = 'DESC';

    if(isset($_POST['submit_sort'])) {
        switch ($_POST['sorteer']) {
            case  'date_asc': $column ='date';
            $order = 'ASC';
                break;
            case 'date_desc': $column='date';
                $order = 'DESC';
                break;
            case 'descr_asc':$column='descr';
            $order = 'ASC';
            break;
            case 'descr_desc': $column='descr';
            $order = 'DESC';
            break;
        }
    }


    $dbc = mysqli_connect(HOST,USER,PASS,DBNAME) or die ('Kan niet verbinden met de database');

    if (isset($_POST['submit_search'])) {
        $searchterm = mysqli_real_escape_string($dbc,trim($_POST['searchterm']));
        $searchterm = '%' . $searchterm . '%';
    } else {
        $searchterm = '%';
    }

    $query = "SELECT * FROM instaclone_images WHERE beschrijving LIKE '$searchterm' ORDER BY $column $order";


    $result = mysqli_query($dbc,$query);

    while ($row = mysqli_fetch_array($result)) {
        $target = $row['target'];
        $date = $row['date'];
        $username = $row['username'];
        $beschrijving = $row['beschrijving'];
        echo '<div class="inline">';
        echo '<img src="  ' . $target . ' " height=600px width=750px align=center /><br>';
        echo $date .' . ' . $username . ' . ' . $beschrijving . '<br>';
       echo '</div>';
    }

    ?>



</div>

</body>
</html>