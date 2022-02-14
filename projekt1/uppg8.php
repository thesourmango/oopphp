<article>
    <h2>Uppg 8</h2>
    <p>Hur många unika besökare har sett sajten?</p>

    <?php
    // Tips, använd ip eller remote_user som krav för unik
    $remote_user = $_SERVER['REMOTE_USER'];
    $ip = $_SERVER['REMOTE_ADDR'];
    // To-Do: skapa en fil, skriv in infon, stäng filen
    $myfile = fopen("besok.txt","a+") or die("Filen gick inte att öppna");
    //print(fread($myfile,filesize("besok.txt")));
    fwrite($myfile,$remote_user." var här kl 11:10");
    fclose($myfile);
    print("Hej ".$remote_user.", ditt besök har skrivits i loggen");
    ?>

</article>