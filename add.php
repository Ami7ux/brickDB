<?php require("verbindung_db_session.php"); ?>

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
              <a href="find.php">Datensatz Suchen</a><br>
               <?php
                 if ($_SESSION["rolle"] === "admin") {
                   echo "<a href=\"add.php\">Datensatz Hinzufügen</a><br>";
                   echo "<a href=\"update.php\">Datensatz Ändern</a><br>";
                 }
               ?>
               <a href="controller_logout.php">Abmelden</a>
            </nav>
        </header>

        <main>
          <h1>Datensatz Hinzufügen</h1>


        </main>

        <footer>

            <hr>
            <p>&copy; 2021<a href="mailto:andre.sepp.m@gmx.de?subject=Mail von BrickDB Startseite">André Sepp Müller</a></p>

        </footer>

    </div>

</body>

</html>
