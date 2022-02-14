<article>
    <h2>Uppg 6</h2>
    <p>Logga in för att se din profil</p>
    <form action="index.php" method="GET">
        Användarnamn: <input type="text" name="user">
        <button type="submit">Logga in</button>
    </form>

    <?php
    // Request funkar för både get och post data
    if (!empty($_REQUEST['user'])) {
        // Stoppa XSS
        $username = test_input($_REQUEST['user']);
        // Lagra användarnamnet i session storage
        $_SESSION['user'] = $username;
        print("Signing in as " . $username . "... <br>");
        print("You will be redirected to your profile page in 5 secs");
        header("Refresh:5; url=./profile.php");
    }

    // Skriv ut användarens profil
    // användarnamnet lagrade vi i en cookie
    // print ("Ditt användarnamn är: " . $_COOKIE['username']) . "<br>";
    // Session storage är smartare än att lagra 1000 cookies
    // (Dessutom är session storage osynlig för användaren)
    // Skriv ut data från Session
    // print("Din email är: " . $_SESSION['email']);

    ?>

</article>