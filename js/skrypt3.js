$(document).ready(function (){
var id;
var danie;
var numer;
var cena;
var x;
var c;
var myDostawca = "";
myDostawca = "dostawca2";
var myDostawca1 = "";
myDostawca1 = "Opoka";
var myDostawca2 = "";
myDostawca2 = "Mucha";

danie = "";

var value1;
var value2;
var sesa;


    $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
    $("#datepicker").datepicker().datepicker('setDate', 'today');
    $("#datepicker").datepicker({
            showButtonPanel: true,
            showWeek: true,
            firstDay: 1
    });//.datepicker("show");



	var currentDate = $( "#datepicker" ).datepicker( "getDate" );
//	alert (currentDate);
//
//	var date1 = $("#datepicker").datepicker().val();
//	alert (date1);

	function getTime() {
		var teraz = new Date;
		var wynik = teraz.getHours() + ":" + teraz.getMinutes();

	return(wynik);
	}

    var godzina=getTime();
		//alert("Jest godzina " + godzina);

	// załadowanie listy nazwisk

    $.ajax({ type: "POST", url: "order2b.php", data:{ currentDate: currentDate } })


    /*WYSYŁANIE DANYCH DO BAZY*/
    $('#wyslij').click(function () { /*Zdefiniowanie zdarzenia inicjującego
    - kliknięcie przycisku wyślij*/

        /*Funkcja pobierająca wartość opcji z listy, w tym przypadku nazwa kraju,
        która następnie zapisywana jest do zmiennej*/
        var numer = $('#order1').val();
        var date1 = $("#datepicker").datepicker().val();
		function getTime() {
			var teraz = new Date;
			var wynik = teraz.getHours() + ":" + teraz.getMinutes();

		return(wynik);
		}
		//alert("Jest godzina " + getTime());
		var godzina=getTime();
		alert("Jest godzina " + godzina);
        $.ajax({
            type:"GET", /*Informacja o tym, że dane będą wysyłane*/
            url:"wyslij.php", /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
            data: {sesa:sesa1,
            data_zam:date1,
			godzina_zam:godzina,
			dostawca_zam:myDostawca2,
            numer:numer,
			danie:danie,
			cena:cena



            }, /*Zdefiniowanie jakie dane będą wysyłane na zasadzie
            pary klucz-wartość np: wartosc_z_listy_ajax=Polska*/

                /*Działania wykonywane w przypadku sukcesu*/
                success:function() {

                    /*Zdefiniowanie tzw. alertu (prostej informacji) w sytacji sukcesu wysyłania.
                    Za pomocą alertów możemy diagnozować poprawne działania funkcji.
                    Jest to bardzo przydatne w sytacji problemów z dziłaniem programu.*/

				$("#mybody").load( "order.php");

                },

                /*Działania wykonywane w przypadku błędu*/
                error: function(blad) {
                    alert( "Wystąpił błąd");
                    console.log(blad); /*Funkcja wyświetlająca informacje
                    o ewentualnym błędzie w konsoli przeglądarki*/
                }
        });

    });

    $("#idBtn1").click(function(){
//    alert("test");
        window.location.href='raport1.php'

    });
    $("#idBtn2").click(function(){
   // alert('test2');
        window.location.href='order2b.php'
    });



    // pobiera do zmiennej Value2 wartość  pierwszej kolumny ( NR SAP)
    $('#table1 tr').click(function () {

        value2 = $(this).find(":input:text").val();
        // alert("wartosc 1 kolumny "+ value);

    });

    // przełacnik zakładek  TABs
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });

    // dodaje do act span nazwe aktywnego tabs
    $('.nav-tabs a').on('shown.bs.tab', function(event){
        x = $(event.target).text(); // active tab
        $(".act span").text(x);
    });

    // domyslne wczytanie aktywnego tabs - ostatni
    $(function () {
        $('#myTab li:last-child a').tab('show');
        //alert("xxxx");
    });

    // akcja kiedy zmiana daty w datapicker
    $( "#datepicker" ).change(function () {
        value1 = $( this ).val();
        var date1 = $("#datepicker").datepicker().val();
            $.ajax({
                type:"GET", /*Informacja o tym, że dane będą wysyłane*/
                url:"dane_do_bazy.php", /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
                data: {sesa:value2,
                data:date1,
                dostawca:x,
                danie:value1

                }, /*Zdefiniowanie jakie dane będą wysyłane na zasadzie
                pary klucz-wartość np: wartosc_z_listy_ajax=Polska*/

                /*Działania wykonywane w przypadku sukcesu*/
                success:function() {

                /*Zdefiniowanie tzw. alertu (prostej informacji) w sytacji sukcesu wysyłania.
                Za pomocą alertów możemy diagnozować poprawne działania funkcji.
                Jest to bardzo przydatne w sytacji problemów z dziłaniem programu.*/

                //$("#mybody").load( "order.php");

                },

                /*Działania wykonywane w przypadku błędu*/
                error: function(blad) {
                alert( "Wystąpił błąd");
                console.log(blad); /*Funkcja wyświetlająca informacje
                o ewentualnym błędzie w konsoli przeglądarki*/
                }
            });


    });

    // akcja kiedy dodanie dania
    $( "#table1 input" ).change(function () {

        value1 = $( this ).val();
        var date1 = $("#datepicker").datepicker().val();
        var czas1 = getTime()+":00";
        //alert(czas1);

            $.ajax({
                type:"GET", /*Informacja o tym, że dane będą wysyłane*/
                url:"dane_do_bazy2.php", /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
                data: {sesa:value2,
                data:date1,
                dostawca:x,
                danie:value1,
                czas:czas1


                }, /*Zdefiniowanie jakie dane będą wysyłane na zasadzie
                pary klucz-wartość np: wartosc_z_listy_ajax=Polska*/

                /*Działania wykonywane w przypadku sukcesu*/
                success:function() {

                /*Zdefiniowanie tzw. alertu (prostej informacji) w sytacji sukcesu wysyłania.
                Za pomocą alertów możemy diagnozować poprawne działania funkcji.
                Jest to bardzo przydatne w sytacji problemów z dziłaniem programu.*/

                //$(window).load( "order.php");

                },

                /*Działania wykonywane w przypadku błędu*/
                error: function(blad) {
                alert( "Wystąpił błąd");
                console.log(blad); /*Funkcja wyświetlająca informacje
                o ewentualnym błędzie w konsoli przeglądarki*/
                }
            });
    });

}); /*Klamra zamykająca $(document).ready(function(){*/
