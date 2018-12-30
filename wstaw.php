<?php
 
/*Za³¹czenie pliku odpowiadaj¹cego za po³¹czenie z baz¹ danych.*/
require_once('baza.php');

/*Przypisanie danych wys³anych przez skrypt.js do zmiennej*/
$sesa= $_GET['sesa'];
$data_zam=$_GET['data_zam'];
$godzina_zam=$_GET['godzina'];
$dostawca_zam=$_GET['dostawca_zam'];
$numer=$_GET['numer'];
$danie= $_GET['danie'];
$cena= $_GET['cena'];
$dofinansowanie="7";


echo $sesa;
echo $data_zam; 
 
/*Definicja funkcji filtruj¹cej wywo³ywana na zmiennej przed jej przes³aniem do bazy. 
Utworzona ze wzglêdów bezpieczeñstwa.*/
 

?>