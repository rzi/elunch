<?php

/*Załączenie pliku odpowiadającego za połączenie z bazą danych.*/
require_once('baza.php');

/*Przypisanie danych wysłanych przez skrypt.js do zmiennej*/
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

/*Definicja funkcji filtrującej wywoływana na zmiennej przed jej przesłaniem do bazy.
Utworzona ze względów bezpieczeństwa.*/


?>
