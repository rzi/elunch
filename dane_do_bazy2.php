<!doctype html>
<html>

<head>
    <meta charset="UTF-8" >

</head>

<body>
<?php

    $my_sesa = $_GET['sesa'];
    $my_data = $_GET['data'];
    $my_dostawca = $_GET['dostawca'];
    $my_danie = $_GET['danie'];
    $my_czas = $_GET['czas'];
    echo $my_sesa ;
    echo $my_data ;
    echo $my_czas ;
    require "connection3.php";
    connection3();

    // dodajemy rekord do bazy
	$zapytanie_wyslij = "INSERT INTO orders
	(id_users,data,czas,dostawca,numer)
	VALUES
	('$my_sesa','$my_data','$my_czas','$my_dostawca','$my_danie')
	";

	/*Wykonanie zapytania wysyłającego*/
	$wynik_wyslij = mysqli_query($link3, $zapytanie_wyslij);

    if($wynik_wyslij) echo "Rekord został dodany poprawnie";
    else echo "Błąd nie udało się dodać nowego rekordu";

    mysqli_close($link3);
	header( 'Location: userManagement.php' ) ;
?>
</body>
</html>
