$(document).ready(function ( ){
//wersja z datepicker bootstrap

    var value1;
    var value2;
    var dostawca;
    var dost1 = "Opoka";
    var row_index = 0;
  //  var col_index = 0;
    var myData;

    $(".act span").text(dost1); // domyslnie  dost1=opoka

    //$('.datepicker').datepicker();

    function getTime() {
        var teraz = new Date();
        var wynik = teraz.getHours() + ":" + teraz.getMinutes();
        return (wynik);
    } // bieżąca godzina
     // domyslne wczytanie aktywnego tabs -pierwszy
    $(function () {
        $('#myTab li:first-child a').tab('show');
        //alert("xxxx");
   });
    //obsługa przycsków
    $("#idBtn1").click(function () {
            //alert("test raport");
            window.location.href = 'raport1.php';
    });
    $("#idBtn2").click(function () {
            //alert('test2 baza');
            window.location.href = 'order2b.php';
    });
    $("#idBtn3").click(function () {
            //puste
    });

    // pobiera do zmiennej Value2 wartość  pierwszej kolumny ( NR SAP)
    $('#table1 tr td').click(function () {
        value2 = $(this).parent().find(":input:text").val();
        console.log('wartość SAP: ', value2);
        row_index = $(this).parent().index();
        col_index = $(this).index();
        console.log(' wiersz: ',row_index);
        //console.log('kolumna: ',col_index);

    });

    // przełacnik zakładek  TABs
    $(".nav-tabs a").click(function () {
        $(this).tab('show');
    });
    // dodaje do act span nazwe aktywnego tabs
    $('.nav-tabs a').on('shown.bs.tab', function (event) {
        dostawca = $(event.target).text(); // active tab
        $(".act span").text(dostawca);
    });
//    // akcja kiedy zmiana daty w datapicker
//    $("#datepicker").change(function () {
//        value1 = $(this).val();
//        var date1 = $("#datepicker").val();
//        //alert(date1);
//        dost1= $(".act span").text();
//        //value2 = $(this).find(":input:text").val();
//       //alert (value2);
//        $.ajax({
//            type: "GET",
//            /*Informacja o tym, że dane będą wysyłane*/
//            url: "dane_do_bazy.php",
//            /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
//            data: {
//                sesa: value2,
//                data: date1,
//                dostawca: dost1,
//                danie: value1
//            },
//            /*Zdefiniowanie jakie dane będą wysyłane na zasadzie
//                           pary klucz-wartość np: wartosc_z_listy_ajax=Polska*/
//            /*Działania wykonywane w przypadku sukcesu*/
//            success: function () {
//                /*Zdefiniowanie tzw. alertu (prostej informacji) w sytacji sukcesu wysyłania.
//                Za pomocą alertów możemy diagnozować poprawne działania funkcji.
//                Jest to bardzo przydatne w sytacji problemów z dziłaniem programu.*/
//                //$("#mybody").load( "order.php");
//                $("#dane_tabela").load("tabela.php", {
//                    d: date1
//                });
//                $("#dane_tabela2").load("tabela2.php", {
//                    d1: date1
//                });
//                $("#dane_tabela3").load("tabela3.php", {
//                    d1: date1
//                });
//            },
//            /*Działania wykonywane w przypadku błędu*/
//            error: function (blad) {
//                alert("Wystąpił błąd");
//                console.log(blad);
//                /*Funkcja wyświetlająca informacje
//                               o ewentualnym błędzie w konsoli przeglądarki*/
//            }
//        });
//        row_index = 0;
//        col_index = 0;
//    });

$("#datepicker").change(function () {
    var date1 = $("#datepicker").val();
    console.log("data: ",date1);               $("#dane_tabela").load("tabela.php", {
                d: date1
    });
    $("#dane_tabela2").load("tabela2.php", {
                d1: date1
    });
    $("#dane_tabela3").load("tabela3.php", {
                d1: date1
    });

    row_index = 0;
    col_index = 0;
});

    // Obsługa enter
    $('#table1 input').keyup(function(e) {

        console.log('keyup called');
       var code = e.keyCode || e.which;
       if (code == '13') {
           value1 = $('#datepicker').val();
           console.log('wartośc inputa',value1)
           var date1 = $("#datepicker").datepicker().val();
           var czas1 = getTime() + ":00";
           dost1= $(".act span").text();
           //alert (date1);
           $.ajax({
               type: "GET",
               /*Informacja o tym, że dane będą wysyłane*/
               url: "dane_do_bazy2.php",
               /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
               data: {
                   sesa: value2,
                   data: date1,
                   dostawca: dost1,
                   danie: value1,
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
