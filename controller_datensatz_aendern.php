<?php
session_start();
$_SESSION["elementnummer"] = $_GET["elementnummer"];
header('Location: update.php');
?>
