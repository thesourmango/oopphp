<article>
    <h2>Annonserna</h2>
    <p>Här kommer data från databasen med pdo</p>

    <?php
    $sql = "SELECT * FROM annonser"; // SQL kommandot vi vill köra
    $stmt = $conn->query($sql); // Query är metoden. Returnerar FALSE eller mysqli_result objekt
    // Om ni ska gå genom många resultat
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // fetch_assoc() är en metod av mysqli_result
        print("Användarnamn: " . $row['username'] . "<br>"); // Endast ett resultat? Lämna bort while
    }

    ?>
</article>