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
 
function filtrowanie($zmienna) 
{
  $zmienna = substr($zmienna, 0, 9); // Ograniczenie ciągu do pierwszych 10 znaków
  $zmienna = trim($zmienna);
  $zmienna = stripslashes($zmienna);
  $zmienna = htmlspecialchars($zmienna); 
  return $zmienna; 
}
 
/*Przypisanie danych wysłanych przez skrypt.js do zmiennej*/
$wartosc_z_listy_post=$_GET['klucz_ajax'];
 
/*Przypisanie wyniku funkcji filtrowanie do zmiennej*/
$wartosc_z_listy_post_filtr=filtrowanie($wartosc_z_listy_post);
 
/*Zapytanie wprowadzające do kolumny nazwa_kraju, w tabeli kraje, 
wartości ze zmiennej $wartosc_z_listy_post_filtr*/
$zapytanie_wyslij = "INSERT INTO 
					orders ( user, data, czas, dostawca, numer, danie, cena, dofinansowanie)
					VALUES ('$sesa','$data_zam','$godzina_zam','$dostawca_zam','$numer','$danie','$cena','$dofinansowanie')";
 
/*Wykonanie zapytania wysyłającego*/
$wynik_wyslij = mysqli_query($db, $zapytanie_wyslij);
?>