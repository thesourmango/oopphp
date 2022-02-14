<article>
    <h2>Registrera dig</h2>
    <p>Fyll i registreringsformuläret så lägger vi till dig på sajten</p>
    <form action="login.php" method="GET">
        Användarnamn: <input type="text" name="username"><br>
        Lösenord: <input type="text" name="password"><br>
        Epost: <input type="email" name="email"><br>
        <input type="submit" value="Registrera dig">
    </form>

    <?php

    if ( !empty($_REQUEST['username']) && !empty($_REQUEST['password']) && !empty($_REQUEST['email']) ) {
        // Testar att lägga till data i DB med PHP och PDO med en PREPARED STATEMENT
        $username = test_input($_REQUEST['username']); 
        $email = test_input($_REQUEST['email']);

        $password = test_input($_REQUEST['password']);
        $password = hash("sha256", $password);
        print($password);

        $fullname = "Test User3"; $city = "qwe"; $aboutme = "Hej på dig";
        $salary = 10000; $preference = 3;  
        $sql = "INSERT INTO annonser (id, username, fullname, password, email, city, aboutme, salary, preference) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = $conn->prepare($sql);
        if ($stmt->execute([$username, $fullname, $password, $email, $city, $aboutme, $salary, $preference])) {
            print("Du har registrerats!");
        }
    }
    

    ?>
</article>
   
