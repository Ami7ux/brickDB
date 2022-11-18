<?php
//Wenn eine Session aktiv ist, geht es dirkt zur find.php
session_start();
if (isset($_SESSION["aktiv"])){

  header('Location: find.php');}
?>

<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>BrickDB</title>
</head>

<body>
        <header>
            <nav>

            </nav>
        </header>

        <main>
          <h1>Anmeldung</h1>
          <form action="controller_anmeldung.php" method="POST">
            <label for="nutzer" >Personalnummer:</label>
            <input type="nutzer" name="nutzer" placeholder="Nutzernamen eingeben..">
            <label for="passwort">Passwort:</label>
            <input type="password" name="password" placeholder="Passwort eingeben..">
            <button type="submit">Anmelden</button>
          </form>
        </main>

        <footer>

            <hr>
            <p>&copy; 2021<a href="mailto:andre.sepp.m@gmx.de?subject=Mail von BrickDB Startseite">André Sepp Müller</a></p>

        </footer>

    </div>

</body>

</html>
