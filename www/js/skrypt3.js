$(document).ready(function ( ){
//wersja z datepicker bootstrap
var value1;
var value2;
var dostawca;
var dost1 ;
var wybrany_dostawca;
dost1= "Opoka";
var row_index = 0;
$(".act span").text(dost1); // domyslnie  dost1=opoka

var now = new Date();
var today = now.getFullYear() + '-' + (now.getMonth() +11) + '-' +  now.getDate()   ;
    //alert(today);
    console.log(today);
    $("#datepicker").val(today);
   $("#datepicker").trigger('click');

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
	//$("#datepicker").change();
});
// dodaje do act span nazwe aktywnego tabs
$('.nav-tabs a').on('shown.bs.tab', function (event) {
		 dostawca = $(event.target).text(); // active tab
		$(".act span").text(dostawca);
		//$("#datepicker").change();
});
$("#datepicker").change(function () {
	var date1 = $("#datepicker").val();
	console.log("data: ",date1);
	wybrany_dostawca = $(".act span").text();
	switch(wybrany_dostawca){
		case "Opoka":
			$("#dane_tabela").load("tabela.php", {
							d: date1
			});
		break;
		case "Mucha":
			$("#dane_tabela3").load("tabela3.php", {
							d1: date1
			});
		break;
	}

		//	$("#dane_tabela2").load("tabela2.php", {
		//							d1: date1
		//	});
	row_index = 0;
});
// Obsługa enter
$('#table1 input').keyup(function(e) {
	console.log('keyup called');
	var code = e.keyCode || e.which;
	if (code == '13') {
		value1 = $('#datepicker').val();
		console.log('wartośc inputa',value1)
		//var date1 = $("#datepicker").datepicker().val();
		var czas1 = getTime() + ":00";
		dost1= $(".act span").text();
		//alert (date1);
		var request = $.ajax({
			async: true,
			method: "GET",
			url: "dane_do_bazy2.php",
			data: {
				sesa: value2,
				data: date1,
				dostawca: dost1,
				danie: value1,
				czas: czas1
			}
		});
		request.done (function () {
		 /*Zdefiniowanie tzw. alertu (prostej informacji) w sytacji sukcesu wysyłania.*/
		});
			/*Działania wykonywane w przypadku błędu*/
		request.fail (function (blad) {
			alert("Wystąpił błąd");
			console.log(blad);
		});
		$('#table1 tr input.danie').slice(row_index+1 ,row_index+2).focus().trigger("click"); //+1 bo talela jest liczona od 0 , +2 bo chcemy dodać 1
			 //return false;
	}
}); // keyup
}); /*Klamra zamykająca $(document).ready(function(){*/
