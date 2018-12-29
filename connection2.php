<?php
/******************************************************
* connection.php
* konfiguracja połączenia z bazą danych
* Connecting to and selecting a MySQL database named sakila
* Hostname: 127.0.0.1, username: your_user, password: your_pass, db: sakila
* $mysqli = new mysqli('127.0.0.1', 'your_user', 'your_pass', 'sakila');
*
******************************************************/
function connection2() {
global $link2;
$link2 = mysqli_connect("elunch.cba.pl", "elunchDB1", "elunchDB1", "elunch");
if (!$link2) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
 exit; echo '<br><BR>Poprawne połączenie z bazą danych<BR>';
}
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
}

?>
