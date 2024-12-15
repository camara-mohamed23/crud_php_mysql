<?php

$nom = "localhost";
$username = "root";
$pass = "" ;
$bd ="crude_php";

$con = mysqli_connect($nom, $username,$pass,$bd);
if(!$con){
    die("erreur de connection à la base de donnée".mysqli_connect_error());
}


//echo"vous etez bien connectéà la base de donnée";