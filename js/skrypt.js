/*Ustawienie wykonania działań wówczas, gdy strona jest całkowicie wczytana */
$(document).ready(function(){
	var id;
	var danie ;
	var numer;
	var cena;
	var x;
	var c;
	var myDostawca = "";
	myDostawca="dostawca2";
	var myDostawca1= "";
	myDostawca1="Opoka";
	var myDostawca2= "";
	myDostawca2="Mucha";

	danie="";

	//alert (" id "+id+" danie "+danie);
	loadToListbox(); // wczytanie listy dań do listboxa

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

	var opoka = document.getElementById('opoka');
	opoka.onclick = function(){
	//alert("kliknięcie opoka");
	$("#order1").empty();
	myDostawca="dostawca1";
	myDostawca2="Opoka";
	loadToListbox();

	};
	var mucha = document.getElementById('mucha');
	mucha.onclick = function(){
	//alert("kliknięcie mucha");
	$("#order1").empty();
	myDostawca = "dostawca2";
	myDostawca2 = "Mucha";
	loadToListbox();
	};

	var myOrder1 = document.getElementById('order1');
		myOrder1.ondblclick = function(){
		if (confirm('Czy jesteś pewien, że chcesz zamówic lunch?')) {
        alert('No to zamawiaj');
		}
	};

function loadToListbox(){
	$.ajax({
		type:"GET", /*Informacja o tym, że dane będą pobierane*/
		url:"pobierz.php", /*Informacja, o tym jaki plik będzie przy tym wykorzystywany*/
		contentType:"application/json; charset=utf-8", /*Informacja o formacie transferu danych*/
		dataType:'json', /*Informacja o formacie transferu danych*/
		data        : { //dane do wysyłki
        dostawca : myDostawca

					},

			/*Działania wykonywane w przypadku sukcesu*/
			success: function(json) { /*Funkcja zawiera parametr*/


				/*Pętla typu for...in języka Javascript na danych w formacie JSON*/
				for (var klucz in json)
					{
						var wiersz = json[klucz];  /*Kolejne przebiegi pętli wstawiają nowy klucz*/
						 id = wiersz[0];

						 numer=wiersz[1];
						 danie = wiersz[2];

						 cena=wiersz[3];

						// /*Ustalenie sposobu wyświetlania pobranych danych w bloku div*/
						// $("<span>id: "+id+" numer: "+numer+" danie: "+danie+"  cena: "+cena+" zł</span>")

						 // .appendTo('#wykaz')
						// .append("<hr>")

						 $("#order1").append($('<option>',
						 { value: id,
						 text: numer+" "+danie+" "+cena+" zł",
						 selected: 1,
						 selectedIndex: 1
						 }));



					}








			},


			/*Działania wykonywane w przypadku błędu*/
			error: function(blad) {
				alert( "Wystąpił błąd vvvvvvvvvvvvvvvvv");
				console.log(blad); /*Funkcja wyświetlająca informacje
				o ewentualnym błędzie w konsoli przeglądarki*/
			}

    });

}



}); /*Klamra zamykająca $(document).ready(function(){*/
