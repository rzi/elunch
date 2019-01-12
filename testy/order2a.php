<?php  session_start(); echo '<br>'; $gender;?>
<!doctype html>
<html>
<head>
    <title>Orders</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/www/css/bootstrap.min.css">
	<link rel="stylesheet" href="/www/css/style.css" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="/www/js/skrypt3.js"></script>

	<script>
		$(document).ready(function() {
/*			$("#idBtn").click(function(){
				alert("test");
			});
			$("#idBtn2").click(function(){
				alert('test2');

			});*/
			var value1;
            var value;
			 $( "input" ).change(function () {
				  value1 = $( this ).val();

                // value = $('#table1 tr').find(":input:text").val();
                alert("wartosc 1 kolumny "+ value +" wartość inputa "+value1);
                     //alert ("wartosc "+value1);
			 });


			/*$('#table1 td').click(function () {
				var index = $( "td" ).index( this );
				//alert ("numer komórki kliknientej to: " + index);
             //   var index2 = $('#table1').find("tr:eq(2)").find("td:eq(1)").html();


			});*/


			$('#table1 tr').click(function () {
//
////				var nrWiersza = $( "tr" ).index( this );
////				//alert ("numer wiersza to: " + nrWiersza);
////
////				var wartosc1Komorki=($(this).children("td").html());
////                //console.log(wartosc1Komorki);
////                var res = wartosc1Komorki.split(" ");
////                var start1 = 7;
////                var stop1 = res[3].length -1;
////                var res2 = res[3].slice(start1,stop1);
//
//                //console.log(res);
//                ///console.log(res2);
//
//				//alert(" wartość pierwszej komórki w wierszu  NR SAP to: " + res2); //res2 to wartość pierwszej kolumny z tabeli
//
////                var start1 = 6;
////                var stop1 = res[2].length -1 ;
////                var res3 = res[2].slice(start1,stop1);
//
//                //console.log(res3);
//
               value = $(this).find(":input:text").val();
              // alert("wartosc 1 kolumny "+ value);

			});

            //$('#table1 td').click(function () {
				//var index = $( "td" ).index( this );
				//alert ("numer komórki kliknientej to: " + index);
                //var colIndex = $(this).parent().children().index($(this));
                //var rowIndex = //$(this).parent().parent().children().index($(this).parent());
                //alert('Row: ' + rowIndex + ', Column: ' + colIndex);

			//});



		});

	</script>
</head>
<body>
	<!-- gora strony -->
	<header class="site-top">
		<div class="container ">
			<div class="d-flex flex-row">
				<div class="flex-fill p-2 bd-highlight">
					<a href="/"><img src="/www/img/logo.png"> </a>
				</div>

				<div class="flex-fill align-self-center ">
					<h3>Wykonaj raport </h3>
				</div>
				<div class="flex-fill align-self-center ">

				</div>
			</div>

			<div id="hrline">
			</div>
		</div>

	</header>
	<br>
	<!-- Tresc strony -->
	<section class="container">
		<div class="container">
			<div class="row">
				<div class="col-4 col-lg-4 ">
					<div class="container-fluid mh-100 ">
						<div class=ramkaLewa>
<!--						<?php echo "<form action='' method='get'>";?>-->
							<p > Wybierz zakres raportu: <input  name="danie xx" type="text" style = "width:200px;" id="datepicker"></p> <br/>

						</div>
					</div>
				</div>

				<div class="col-12">
					<div class="container">
						<div class=ramkaLewa>
							<p > Wybierz raport:</p> <br/>
							<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Opoka</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mucha</a>
							  </li>

							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<?php
										require "connection.php";
										connection();
										echo "<table id='table1' class='tableOrder' border='1'><thead><tr ><td>Nr. SAP</td><td >Imię</td><td>Nazwisko</td><td> Danie1</td><td> Danie2</td><td> Danie3</td></tr></thead>";
										echo "<tbody>";

										if($result = mysqli_query($link,"select * from login WHERE 1")){
											while($row = mysqli_fetch_assoc($result)) {
												$val = $row['my_SAP'];
												$val2 = $row['my_first_name'];
												$val3 = $row['my_name'];
												echo "<tr><td>";							echo "<input type='text' name='danie0' value='$val' readonly> ";
												echo "</td>";
												echo "<td>";
												echo "<input type='text' name='danie1' value='$val2' readonly>";
												echo "</td>";
												echo "<td>";
												echo "<input type='text' name='danie2' value='$val3' readonly>";
												echo "</td>";
												echo "<td>";
												echo "<input type='text' id='danie3' class='danie3' name='danie3' value=''>";
												echo "</td>";
												echo "<td>";
												echo "<input type='text'  name='danie4' value=''>";
												echo "</td>";
												echo "<td>";
												echo "<input type='text' name='danie5' value=''>";
												echo "</td>";
												echo "</tr>";
											}
										}

										// if($result = mysqli_query($link,"select * from orders WHERE dostawca='Opoka' and data='2018-08-12'")){
											// echo "<table class='tableOrder' border='1'><thead><tr ><td>Imię</td><td>Nazwisko</td><td> Danie1</td><td> Danie2</td><td> Danie3</td></tr></thead>";
											// while($row = mysqli_fetch_assoc($result)) {
												// echo "<tr><td>";
												// echo $row["data"];
												// echo "</td>";
												// echo "<td>";
												// echo  $row["dostawca"];
												// echo "</td>";
												// echo "<td>";
												// echo $row["numer"];
												// echo "</td>";
												// echo "<td>";
												// echo $row["danie"];
												// echo "</td>";
												// echo "<td>";
												// echo $row["cena"];
												// echo "</td>";
												// echo "<tr>";
											// }
										// }
										mysqli_free_result($result);
										mysqli_close($link);
										echo "</td>
										</tr>
										</tbody>
										</table>";
									?>
								</div>
								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								...Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper quam. Nullam viverra consectetuer. Quisque cursus et, porttitor risus. Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis in nibh vel risus. Sed vel lectus. Ut sagittis, ipsum dolor quam.</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="w-100"></div>
				<br/>
				<div class="col-12 ">
					<div class="container">
						<div class=ramkaLewa>
							<button type="button" class="btn btn-success" id ="idBtn">wczytaj</button>
							<button type="submit" class="btn btn-success" id="idBtn2">zapisz</button>
<!--							<button input type="submit" class="btn btn-success" id="idBtn3" value="Wyślij" name="submit" /> wyślij</button>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
