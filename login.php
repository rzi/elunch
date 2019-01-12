<?php
$login = $_POST['login'];
$haslo = $_POST['haslo'];
?>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- <meta http-equiv="content-type" content="text/html; charset=iso-8859-2"> -->
<title>Strona główna logowania</title>
</head>
<body>
<?php
session_start();
$_SESSION['sesa']=$login;
$_SESSION['haslo']=$haslo;
//echo '<br>';
//echo $_SESSION['sesa'];
//echo '<br>';
//echo $_SESSION['haslo'];
//echo '<br>';

require "connection.php";
connection();

if(!empty($_POST["login"]) && !empty($_POST["haslo"])){
	if($result = mysqli_query($link,"select * from login where my_user = '".htmlspecialchars($_POST["login"])."' AND my_pass = '".htmlspecialchars($_POST["haslo"])."'")){
		$row_cnt = mysqli_num_rows($result);
		if ($row_cnt >0) {
			if($_SESSION['sesa']=="admin" && $_SESSION['haslo']=="admin"){
				header( 'Location: parametry.php' ) ; // gdy admin (parametry)
				mysqli_free_result($result);
			}
			else{
			header( 'Location: order2b.php' ) ; // normalne logowanie
			mysqli_free_result($result);
			}
		}
	}
}
echo '<br>';
echo " błedne logowanie spróbuj ponownie";
echo ShowLogin();
mysqli_close($link); ?>

</body>
</html>
<?php
function ShowLogin($komunikat=""){
	echo "$komunikat<br>";
	echo "<form action='login.php' method=post>";
	echo "Login: <input type=text name=login><br>";
	echo "Hasło: <input type=password name=haslo><br>";
	echo "<input type=submit value='Zaloguj!'>";
	echo "</form>";
}
?>
