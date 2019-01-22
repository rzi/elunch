 <?php
// odbieramy dane z formularza
$imie = $_POST['imie'];
$email = $_POST['email'];
$sesa = $_POST['sesa'];
$nazwisko = $_POST['nazwisko'];
$numer_sap = $_POST['numer_sap'];
$grupa = $_POST['grupa'];
$typ = $_POST['typ'];

if($imie and $email) {

    require "connection.php";
	connection();

    // dodajemy rekord do bazy
	$zapytanie_wyslij = "INSERT INTO login
	(my_user,my_pass,my_group,my_SAP,my_first_name,my_name,my_email,my_type)
	VALUES
	('$sesa','$sesa','$grupa','$numer_sap','$imie','$nazwisko','$email','$typ')
	";

	/*Wykonanie zapytania wysyłającego*/
	$wynik_wyslij = mysqli_query($link, $zapytanie_wyslij);

    if($wynik_wyslij) echo "Rekord został dodany poprawnie";
    else echo "Błąd nie udało się dodać nowego rekordu";

    mysqli_close($link);
	header( 'Location: userManagement.php' ) ;
}

?>
