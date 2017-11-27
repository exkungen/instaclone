<?php
include 'host.php';

if(!isset($_POST['submit'])) {
    echo '<p>Ga weg en registreer je snel!</p>';
    exit();
}

if(isset($_POST['submit']))   {
    $dbc = mysqli_connect(HOST,USER,PASS,DBNAME) or die ('cant connect to the database');
    $loginnaam = mysqli_real_escape_string($dbc,trim($_POST['loginnaam']));
    $wachtwoord = mysqli_real_escape_string($dbc,trim($_POST['wachtwoord']));
    $hash_password = hash('sha512',$wachtwoord);

    $randomnummer = rand(1000,9999);
    $hashcode = hash('sha512',$randomnummer);
    $email = mysqli_real_escape_string($dbc,trim($_POST['email']));
    $query = "INSERT INTO instaclone_register VALUES  (0,'$loginnaam','$hash_password','$email','$hashcode',0)";
    $result = mysqli_query($dbc,$query) or die ("Kan niet verbinden met de database");

    echo 'Gelukt, u kunt nu <a href="login.php">inloggen!</a>';
    mysqli_close($dbc);
}









