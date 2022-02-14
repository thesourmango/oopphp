<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dennis Back-end template</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>

    <div id="container">
        <!-- Max 800px bred container-->

        <!-- Logo och huvudmeny -->
        <?php include "header.php" ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

            <!-- Användardata -->
            <?php include "uppg1.php" ?>
            <!-- Tid och datum -->
            <?php include "uppg2.php" ?>
            <!-- Användarinmatning -->
            <?php include "uppg3.php" ?>
            <!-- Registreringsformulär -->
            <?php include "uppg4.php" ?>
            <!-- Cookies -->
            <?php include "uppg5.php" ?>
            <!-- Sessioner -->
            <?php include "uppg6.php" ?>

            <!-- Filhantering -->
            <?php include "uppg8.php" ?>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>