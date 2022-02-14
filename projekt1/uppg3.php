<article>
    <h2>Uppg 3</h2>
    <p>Användarinmatning</p>
    <form action="index.php" method="get">
        Dag: <input type="number" name="dag"><br>
        Månad: <input type="text" name="manad"><br>
        År: <input type="text" name="ar"><br>
        <input type="submit" name="skicka" value="Räkna">
    </form>
    <?php
    // Check ifall vi har klickat räkna?
    if (isset($_GET["dag"]) && !empty($_GET["manad"])) {

        // Hämta inmatad data
        $dag = $_GET["dag"];
        $manad = $_GET["manad"];
        $ar = $_GET["ar"];

        // Kolla om inmatade datumet är korrekt
        if (($dag > 0) && ($dag <= 30)) {
            // Hitta tiden nu
            $tidnu = time();
            // Skapa en timestamp baserat på inmatning
            $giventid = mktime(12, 0, 0, $manad, $dag, 2022);

            // använd floor() för att avrunda neråt

            // Skriv ut variabler
            print("Det är " . $dag . " till det inmatade datumet");
        } else {
            print("Din inmatning är skum?");
        }
    }
    ?>
</article>