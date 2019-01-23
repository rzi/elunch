$(document).ready(function (){
//wersja z datepicker HTML w tabela

var danie;
var nr_SAP;
var row_index = 0;

function getTime() {
    var teraz = new Date();
    var wynik = teraz.getHours() + ":" + teraz.getMinutes();
    return (wynik);
} // bieżąca godzina

$('#table1 tr td').click(function () {
   nr_SAP = $(this).parent().find(":input:text").val();
    console.log('wartość SAP: ', nr_SAP);
    row_index = $(this).parent().index();
    console.log(' wiersz: ',row_index);
});

// Obsługa enter
$('#table1 input').keyup(function(e) {
    //console.log('keyup called');
   var code = e.keyCode || e.which;
   if (code == '13') {
       danie =$(this).val();
       console.log('wartośc inputa',danie)
       var date1 = $("#datepicker").val();
       var czas1 = getTime() + ":00";
       var dost1= $(".act span").text();
       //alert (date1);
       $.ajax({
           async: true,   // this will solve the problem
           type: "GET",
           /*Informacja o tym, że dane będą wysyłane*/
           url: "dane_do_bazy2.php",
           /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
           data: {
               sesa: nr_SAP,
               data: date1,
               dostawca: dost1,
               danie: danie,
               czas: czas1
           },
           done: function () {
               /*Zdefiniowanie tzw. alertu (prostej informacji) w sytacji sukcesu wysyłania. */
           },
           fail: function (blad) {
               alert("Wystąpił błąd");
               console.log(blad);
               /*Funkcja wyświetlająca informacje
                o ewentualnym błędzie w konsoli przeglądarki*/
           }
       });

    $('#table1 tr input.danie').slice(row_index+1 ,row_index+2).focus().trigger("click"); //+1 bo talela jest liczona od 0 , +2 bo chcemy dodać 1
   return false;
   }

}); // keyup

}); /*Klamra zamykająca $(document).ready(function(){*/
