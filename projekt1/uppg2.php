<article>
    <h2>Uppg 2</h2>
    <p>Tid och datum</p>
    <?php
    $tid = date("d.M.Y");
    // Lättaste sättet att få en "svensk" utmatning
    $veckodagar = array("Söndag","Måndag","Tisdag","Onsdag","Torsdag");
    // To-Do: Få en sifferrepresentation av veckodagen från date
    print("Idag är det " . $tid . ", eller hur");
    ?>
</article>