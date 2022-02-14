<article>
    <h2>Uppg 5</h2>
    <p>Här jobbar vi med cookies</p>


<?php
$cookie_name = "username";
$cookie_value = $_SERVER["REMOTE_USER"];
setcookie($cookie_name,$cookie_value, time() + (86400 * 2), "/" ); // 86400 secs per day

if (isset($_COOKIE['username'])) {
    print("Välkommen tillbaka " . $_COOKIE['username']);
}
?>

</article>