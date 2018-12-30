<?php
$dl_tablicy = count($_GET);
echo $dl_tablicy;
echo "<br>";
// echo "<pre>";
 // print_r($array);
// echo "</pre>";

//echo "<pre>";
// $zm= print_r($_GET);
//echo "</pre>";

for( $x = 0; $x <= $dl_tablicy; $x++ )
{
	echo $x."<br>";
	echo $_GET[$x]."<br>";

//echo $zm;
//echo "<br>";
}

?>
