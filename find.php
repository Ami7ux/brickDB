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
           <h1>Datensatz Suchen</h1>

           <form action="find.php" method="get">
<table>
<tr><td><label for="designenummer">Designenummer: </label></td><td><input type="text" name="designenummer"></td><td><button class="btn btn-success btn-sm" type="submit" name="submit1">Ausgeben</button></td></tr>
</form>

<form action="find.php" method="get">
<tr><td><label for="elementnummer">Elementnummer: </label></td><td><input type="text" name="elementnummer"></td><td><button class="btn btn-success btn-sm" type="submit" name="submit2">Ausgeben</button></td></tr>
</table>
</form>

<?php

if (isset($_GET["submit1"])) {

    $suche = $_GET["designenummer"];

    $sqlAbfrage = "SELECT * FROM lego";

    $ergebnisSqlAbfrage = $con->query($sqlAbfrage);

    //Test Abfrage
    if ($con->query($sqlAbfrage) == TRUE && isset($_GET["designenummer"])) {
        echo "Abfrage erfolgreich.";
    }else{
        echo "Abfrage erfolgreich.";
    }

    while ($ausgabe =$ergebnisSqlAbfrage->fetch_object()) {
       if ($suche == $ausgabe->designenummer) {
        echo "<br><hr><img src=\"bilder/".$ausgabe->elementnummer.".png\">";
        echo "<br>Designenummer: ".$ausgabe->designenummer;
        echo "<br>Elementnummer: ".$ausgabe->elementnummer;
        echo "<br>Name: ".$ausgabe->name;
        echo "<br>Farbe: ".$ausgabe->farbe;
        echo "<br>Anzahl: ".$ausgabe->anzahl;
        echo "<br>Zustand: ".$ausgabe->zustand;
        echo "<br>Lagerfach: ".$ausgabe->lagerfach;
        echo "<br>Alternative Designenummer 1: ".$ausgabe->alt1;
        echo "<br>Alternative Designenummer 2: ".$ausgabe->alt2;
        if ($_SESSION["rolle"] === "admin") {
          echo "<form action=\"controller_datensatz_aendern.php\" method=\"get\">";
          echo "<label for=\"name\">Datensatz: </label>";
          echo "<input type=\"text\" name=\"elementnummer\" readonly value=\"".$ausgabe->elementnummer."\">";
          echo "<input type=\"submit\" value=\"Ändern\">";
          echo "</form>";
        }

       }
    }

}

if (isset($_GET["submit2"])) {

    $suche = $_GET["elementnummer"];

    $sqlAbfrage = "SELECT * FROM lego";

    $ergebnisSqlAbfrage = $con->query($sqlAbfrage);

    //Test Abfrage
    if ($con->query($sqlAbfrage) == TRUE && isset($_GET["elementnummer"])) {
        echo "Abfrage erfolgreich.";
    }else{
        echo "Abfrage erfolgreich.";
    }

    while ($ausgabe =$ergebnisSqlAbfrage->fetch_object()) {
       if ($suche == $ausgabe->elementnummer) {
        echo "<br><hr><img src=\"bilder/".$ausgabe->elementnummer.".png\">";
        echo "<br>Designenummer: ".$ausgabe->designenummer;
        echo "<br>Elementnummer: ".$ausgabe->elementnummer;
        echo "<br>Name: ".$ausgabe->name;
        echo "<br>Farbe: ".$ausgabe->farbe;
        echo "<br>Anzahl: ".$ausgabe->anzahl;
        echo "<br>Zustand: ".$ausgabe->zustand;
        echo "<br>Lagerfach: ".$ausgabe->lagerfach;
        echo "<br>Alternative Designenummer 1: ".$ausgabe->alt1;
        echo "<br>Alternative Designenummer 2: ".$ausgabe->alt2;
        if ($_SESSION["rolle"] === "admin") {
          echo "<form action=\"controller_datensatz_aendern.php\" method=\"get\">";
          echo "<label for=\"name\">Datensatz: </label>";
          echo "<input type=\"text\" name=\"elementnummer\" readonly value=\"".$ausgabe->elementnummer."\">";
          echo "<input type=\"submit\" value=\"Ändern\">";
          echo "</form>";
        }
       }
    }

}

?>

         </main>

         <footer>

             <hr>
             <p>&copy; 2021<a href="mailto:andre.sepp.m@gmx.de?subject=Mail von BrickDB Startseite">André Sepp Müller</a></p>

         </footer>

     </div>

 </body>

 </html>
