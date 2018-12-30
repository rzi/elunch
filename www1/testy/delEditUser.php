<?php
/*
   połączenie z bazą
*/
	require "connection.php";
	connection();


/*
   odbieramy zmienne przekazane w linku jak w poradzie
   http://www.kess.com.pl/?sid=10&pid=43
*/

$a = trim($_REQUEST['a']);
$id = trim($_GET['id']);
echo $a;
echo "<br>";
echo $id;
echo "<br>";

if($a == 'edit' and !empty($id)) {
    /* zapytanie do tabeli */
    $wynik = mysqli_query($link,"SELECT * FROM login WHERE
    id='$id'")
    or die('Błąd zapytania o ID');
    /*
     wyświetlamy wyniki, sprawdzamy,
     czy zapytanie zwróciło wartość większą od 0
     */
    if(mysqli_num_rows($wynik) > 0) {
         /* odczytujemy zawartość wiersza z tabeli */
        $r = mysqli_fetch_assoc($wynik);
        /* wczytujemy dane do formularza */
        /*
        w formularz znajdują się ukryte pola "a"
        z wartością "save" i pole "id" z wartością
        zmiennej id
        */
        echo '<form action="" method="post">
        <input type="hidden" name="a" value="save" />
        <input type="hidden" name="id" value="'.$id.'" />

		id:<br />
        <input type="text" name="id"
        value="'.$r['id'].'" /><br />

        my_user:<br />
        <input type="text" name="my_user"
        value="'.$r['my_user'].'" /><br />

		my_group:<br />
        <input type="text" name="my_group"
        value="'.$r['my_group'].'" /><br />

		my_SAP:<br />
        <input type="text" name="my_SAP"
        value="'.$r['my_SAP'].'" /><br />

		my_first_name:<br />
        <input type="text" name="my_first_name"
        value="'.$r['my_first_name'].'" /><br />

		my_name:<br />
        <input type="text" name="my_name"
        value="'.$r['my_name'].'" /><br />

		my_email:<br />
        <input type="text" name="my_email"
        value="'.$r['my_email'].'" /><br />

		my_type:<br />
        <input type="text" name="my_type"
        value="'.$r['my_type'].'" /><br />

        <input type="submit" value="popraw" />
        </form>';
    }
}
elseif($a == 'save') {
    /* odbieramy zmienne z formularza */
    $id = $_POST['id'];
    $my_user = trim($_POST['my_user']);
	$my_group = trim($_POST['my_group']);
	$my_SAP = trim($_POST['my_SAP']);
	$my_first_name = trim($_POST['my_first_name']);
	$my_name = trim($_POST['my_name']);
	$my_email = trim($_POST['my_email']);
	$my_type = trim($_POST['my_type']);

    //$my_email = trim($_POST['my_email']);
    /* uaktualniamy tabelę test */
	//"UPDATE MyGuests SET lastname='Doe' WHERE id=2";
    mysqli_query($link,"UPDATE login SET my_user='$my_user',
	my_group='$my_group',
	my_SAP='$my_SAP',
	my_first_name='$my_first_name',
	my_name='$my_name',
	my_email='$my_email',
	my_type='$my_type'
	WHERE id='$id'")
    or die('Błąd zapytania bazy');
    echo 'Dane zostały zaktualizowane';
	header( 'Location: userManagement.php' ) ;
}
elseif($a == 'del') {
    /* usowamy wiersz z tabeli */
    mysqli_query($link,"DELETE FROM login WHERE id='$id'")
    or die('Błąd zapytania bazy del');
    echo 'Dane zostały zaktualizowane';
	header( 'Location: userManagement.php' ) ;
}
?>
