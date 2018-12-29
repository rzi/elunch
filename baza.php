<?php

/*Definiowanie zmiennych z danymi niezbędnymi do połączenia z bazą danych*/
$serwer = "elunch.cba.pl";
$uzytkownik =  "elunchDB1";
$haslo = "elunchDB1";
$nazwa_bazy = "elunch";

/*Połączenie z bazą*/
$db = mysqli_connect($serwer, $uzytkownik, $haslo, $nazwa_bazy);

/*Komunikat o błędzie w przypadku problemów z połączeniem*/
if (mysqli_connect_errno())
{
    echo 'Błąd';
    exit;
}
else {
	  //echo 'OK';
}

?>
