<?php

/*Za��czenie pliku odpowiadaj�cego za po��czenie z baz� danych.*/
require_once('baza.php');

/*Przypisanie danych wys�anych przez skrypt.js do zmiennej*/
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

/*Definicja funkcji filtruj�cej wywo�ywana na zmiennej przed jej przes�aniem do bazy.
Utworzona ze wzgl�d�w bezpiecze�stwa.*/


?>
