<?php 
/****************************************************** 
* connection.php 
* konfiguracja połączenia z bazą danych
* Connecting to and selecting a MySQL database named sakila
* Hostname: 127.0.0.1, username: your_user, password: your_pass, db: sakila
* $mysqli = new mysqli('127.0.0.1', 'your_user', 'your_pass', 'sakila');
* 
******************************************************/ 
function connection() { 
global $link;
$link = mysqli_connect("elunch.cba.pl", "elunchDB1", "elunchDB1", "elunch");
//mysqli_set_charset('utf8',$link);
//   printf("Initial character set: %s\n", mysqli_character_set_name($link));

    /* change character set to utf8 */
    if (!mysqli_set_charset($link, "utf8")) {
        printf("Error loading character set utf8: %s\n", mysqli_error($link));
        exit();
    } else {
       // printf("Current character set: %s\n", 
        mysqli_character_set_name($link);
    }    
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
 exit; echo '<br><BR>Poprawne połączenie z bazą danych<BR>'; 
}
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
} 

?> 