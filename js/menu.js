/*Ustawienie wykonania działań wówczas, gdy strona jest całkowicie wczytana */
$(document).ready(function(){

 $('#table1 tr').click(function () {

 x=($(this).children("td").html());
  //alert(x);
  var answer = confirm("Zamawiasz lunch ?")
	if (answer) {
		//some code
	var data = new Date();
	var godzina = data.getHours();
	var min = data.getMinutes();
	var sek = data.getSeconds();
	var terazjest = ""+godzina+
	((min<10)?":0":":")+min+
	((sek<10)?":0":":")+sek;
	alert(terazjest);
	if(godzina>8){
		var date2 = $("#datepicker").datepicker().val();
		alert("Jest już po godzinie 9.00. Aby zamówic lunch zadzwoń na recepcje tel.326258400");
		alert(date2);

	}


	//alert("tak");
	}
	else {
		//some code
		alert("x");
	}

 });

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();;

}); /*Klamra zamykająca $(document).ready(function(){*/

function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
$(function() {
    $("#datepicker").datepicker();
    $("#datepicker").change(function() {
        var date = $(this).datepicker("getDate");
       	$("#menuOrder").show();
    });
});
