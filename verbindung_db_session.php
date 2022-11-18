<?php
//Aufbau der Datenbankverbindung
$servername = "localhost";
    $user = "root";
    $pw = "";
    $datenbank = "brickdb";

    $con = new mysqli($servername, $user, $pw, $datenbank);

    if($con->connect_error){
        die("Verbindung Datenbank <img src=\"notconnected.png\"> ".$con->connect_error);
    }
    else echo "Verbindung Datenbank <img src=\"connected.png\">";

//Prüfung ob eine aktive Session vorhanden ist. Wenn nicht dann geht es auf die Startseite

session_start();

if ($_SESSION["aktiv"] === true) {
  echo "Willkommen ".$_SESSION["nutzer"];
}
elseif ($_SESSION["aktiv"] != true) {
  header('Location: index.php');
}
?>
