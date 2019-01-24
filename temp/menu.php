<!doctype html>
<html>
<head>
    <title>Menu</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="/js/menu.js"></script>
</head>
<body id="mybody" class="ddcss3support">
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
			<p> Dostawca1 Mucha </p>
			</div>

			<div class="menuCSS1">
			<p> Dostawca2 Opoka </P>
			</div>
		</div >
		<div class="flex-container2">
			<div width="50px" height="50px" id="menuLewe" class="menuCSS2">
				<div width="400px">
					<button class="tablink" onclick="openPage('Home', this, 'green')" id="defaultOpen" >Home</button>
					<button class="tablink" onclick="openPage('News', this, 'green')" >News</button>
					<div id="Home" class="tabcontent">

						<p> Menu Opoka</p>
						<?php
						require "connection3.php";
						connection3();
						echo "<div >";
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
					<div id="News" class="tabcontent">
						<h3>News</h3>
						<div width="50px" height="50px" id="menuLewe" class="menuCSS2" >
							<p>Menu Mucha</p>
							<?php
							require "connection2.php";
							connection2();
							echo "<div >";
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
						</div>
					</div>
				<br>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
