<article>
    <h2>Uppg 4</h2>
    <p>Registrera dig på sajten!</p>
    <form action="index.php" method="get">
        Användarnamn: <input type="text" name="username"><br>
        E-post: <input type="text" name="email"><br>
        <input type="submit" name="skicka" value="Skapa konto">
    </form>
    <?php 
    

    if  ( !empty($_GET['username']) && !empty($_GET['email']) )  {
        // Hämta get data!! Farligt, XSS och SQL Injection fara!

        $username = test_input($_GET['username']);
        $email = test_input($_GET['email']);

        // To-Do: Skapa slumpmässigt lösenord
        $pass = "890789sdklfjsdkl";
        // Skicka mail med lösenord till nya användaren
        mail($email, "Your password for DenApp", $pass );

        // Spara email till en sessionsvariabel för att visa att man är inloggad
        // Lagra data i session
        $_SESSION['email'] = $email;

        print("Signing up as " . $username . "... check your email<br>");
        print("You will be redirected to the login page in 5 secs");
        header("Refresh:5; url=index.php");
    }

    ?>



</article>