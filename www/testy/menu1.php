<!doctype html>
<html lang="pl-PL">
<head>
    <title>Menu</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/style.css" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<script src="/js/menu.js"></script>
	<script>
		$(document).ready(function() {

			$("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
			$("#datepicker").datepicker().datepicker('setDate', 'today');
			$("#datepicker").datepicker({
				showButtonPanel: true,
				showWeek: true,
				firstDay: 1
			});
			//var currentDate = $("#datepicker" ).datepicker( "getDate" );
			$("#datepicker").datepicker({
			//		your options...

				}).datepicker("show");
			});


	/* 	$(document).ready(function() {
		$('input[value="1"]:checked');

		}); */
	$("#menuOrder").hide();

	</script>
</head>
<body id="mybody" class="ddcss3support">
	<!-- test bootstrap -->
	<header class="container">
	<a href="">LOGO</a>
	</header>

	<div class="layout">
		<div class="flex-container">
			<div  class="logoSchneider">
				<a href="/"><img src="/img/logo.png"> </a>
			</div>
			<div class="hader2" >
				<p>Menu </p>
			</div>

		</div>
		<div id="hrline">
		</div>
		<br>
	  	<div class="flex-container">
			<div class="menuCSS1" >
			<p> Kalendarz i menu </p>
			</div>

			<div class="menuCSS1">
			<p> Zamówienia </P>
			</div>
		</div >

		<div class="flex-container2">
			<div width="50px" height="50px" id="menuLewe" class="menuCSS2" >
				<p>Data na kiedy zamawiasz lunch?: <br><input  type="text" style="top:200px;" id="datepicker"></p>
				<br>
				<div  id="menuOrder">
				<p>Menu:</p>
					<button class="tablink" onclick="openPage('Opoka', this, 'green')" id="defaultOpen" >Opoka</button>
					<button class="tablink" onclick="openPage('Mucha', this, 'green')" >Mucha</button>
					<br>
						<div id="Opoka" class="tabcontent">
							<?php
							require "connection2.php";
							connection2();
							//echo "<div >";
							if($result2 = mysqli_query($link2,"select * from dostawca1 ORDER BY id ASC limit 20")){
								echo "<table  border='1'><thead><tr class='myTr' ><th width='30px' >id</th><th width='70px'>numer</th><th> danie</th><th width='50px'> cena</th></tr></thead>";
								echo "<tbody id='table1'>";
								while($row = mysqli_fetch_assoc($result2)) {
									echo "<tr ><td width='30px'>";
									echo $row["id"];
									echo "</td>";
									echo "<td width='70px'>";
									echo  $row["numer"];
									echo "</td>";
									echo "<td class='myTr2' >";
									echo $row["danie"];
									echo "</td>";
									echo "<td width='50px'>";
									echo $row["cena"];
									echo "</td>";
								}
							}
							mysqli_free_result($result2);
							mysqli_close();
							echo "
							</tbody>
							</table>";
							?>
						</div>
						<div id="Mucha" class="tabcontent">
							<?php
							require "connection3.php";
							connection3();
							//echo "<div >";
							if($result3 = mysqli_query($link3,"select * from dostawca2 ORDER BY id ASC limit 20")){
								echo "<table  border='1'><thead><tr class='myTr' ><th width='30px' >id</th><th width='70px'>numer</th><th> danie</th><th width='50px'> cena</th></tr></thead>";
									echo "<tbody id='table1'>";
								while($row = mysqli_fetch_assoc($result3)) {
									echo "<tr ><td width='30px'>";
										echo $row["id"];
										echo "</td>";
										echo "<td width='70px'>";
										echo  $row["numer"];
										echo "</td>";
										echo "<td class='myTr2' >";
										echo $row["danie"];
										echo "</td>";
										echo "<td width='50px'>";
										echo $row["cena"];
										echo "</td>";
								}
							}
							mysqli_free_result($result3);
							mysqli_close();
							echo "</td>
							</tr>
							</table>";
							?>
						</div>
				</div>
			</div>

			<div width="50px" height="50px" id="menuLewe" class="menuCSS2">
			<?php
				//echo "<br>";
				echo "Lista twoich zamówień:";
				//echo "<br>";
				require "connection.php";
				connection();
				if($result = mysqli_query($link,"select * from orders ORDER BY id DESC limit 6")){
					echo "<table class='tableOrder' border='1'><thead><tr class='myTr' ><th width='60px'>data</th><th width='100px'>dostawca</th><th width='60px'> numer</th><th> danie</th><th width='60px'> cena</th></tr></thead>";
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr><td width='60px'>";
						echo $row["data"];
						echo "</td>";
						echo "<td width='100px'>";
						echo  $row["dostawca"];
						echo "</td>";
						echo "<td width='60px'>";
						echo $row["numer"];
						echo "</td>";
						echo "<td>";
						echo $row["danie"];
						echo "</td>";
						echo "<td width='60px'>";
						echo $row["cena"];
						echo "</td>";
						echo "<tr>";
					}
				}
				mysqli_free_result($result);
				mysqli_close();
				echo "</td>
				</tr>
				</table>";
				?>

			</div>


		</div>

	</div>

</body>
</html>
