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
    col_index = $(this).index();
    console.log(' wiersz: ',row_index);
    //console.log('kolumna: ',col_index);

});


// akcja kiedy zmiana daty w datapicker
//$("#datepicker").change(function () {
//    var date1 = $("#datepicker").val();
//    console.log("data: ",date1);               $("#dane_tabela").load("tabela.php", {
//                d: date1
//    });
//    $("#dane_tabela2").load("tabela2.php", {
//                d1: date1
//    });
//    $("#dane_tabela3").load("tabela3.php", {
//                d1: date1
//    });
//
//    row_index = 0;
//    col_index = 0;
//});

// Obsługa enter
$('#table1 input').keyup(function(e) {
    //console.log('keyup called');
   var code = e.keyCode || e.which;
   if (code == '13') {
       danie =$(this).val();
       console.log('wartośc inputa',danie)
       var date1 = $("#datepicker").val();
       var czas1 = getTime() + ":00";
       dost1= $(".act span").text();
       //alert (date1);
       $.ajax({
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

           success: function () {
               /*Zdefiniowanie tzw. alertu (prostej informacji) w sytacji sukcesu wysyłania.
            Za pomocą alertów możemy diagnozować poprawne działania funkcji.
            Jest to bardzo przydatne w sytacji problemów z dziłaniem programu.*/
               //$(window).load( "order.php");
           },
           /*Działania wykonywane w przypadku błędu*/
           error: function (blad) {
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
