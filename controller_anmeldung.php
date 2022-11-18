<?php
$servername = "localhost";
    $user = "root";
    $pw = "";
    $datenbank = "brickdb";

    $con = new mysqli($servername, $user, $pw, $datenbank);

    $sqlAbfrage = "SELECT * FROM benutzer";

    $ergebnisSqlAbfrage = $con->query($sqlAbfrage);

    while ($ausgabe =$ergebnisSqlAbfrage->fetch_object()) {

       if ($_POST["nutzer"] === $ausgabe->nutzer & $_POST["password"] === $ausgabe->passwort) {
         session_start();
               $_SESSION["nutzer"] = $ausgabe->nutzer;
               $_SESSION["rolle"] = $ausgabe->rolle;
               $_SESSION["aktiv"] = true;
         header('Location: find.php');
         exit;
       }
     }
//Wenn die eingegebenen Daten falsch sind, geht es zurück zur Index
header('Location: index.php');


?>
