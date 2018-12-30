<?php  session_start(); echo '<br>'; $gender;?>
<!doctype html>
<html>
<head>
    <title>Orders</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/www/css/style.css" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="/www/js/skrypt.js"></script>
	
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
	</script>	
</head>
<body id="mybody" class="ddcss3support">
	
	<div class="layout">
		<div class="flex-container">
			<div  class="logoSchneider">
				<a href="/"><img src="/www/img/logo.png"> </a>
			</div>
			<div class="hader1" >
				<p>Zamówienie </p> 
			</div>
			<div class="logowanie" >
				<p>Użytkownik:  <?php echo $_SESSION['sesa'];?> </p> 
                <script>
                var sesa1 = '<?php echo $_SESSION['sesa']; ?>';
               //alert ("alert: "+sesa1);
                </script>
			</div>      
		</div>
		<div id="hrline">
		</div>
		<br>
	  	<div class="flex-container">
			<div class="lewy" >
			<p> Kalendarz </p>
			</div>
		
			<div class="srodek">
			<p> Menu </p>
			</div>
		
			<div class="prawy">
			<p> Lista zamówień </P>
			</div>
		</div >
		<br>
		<div class="flex-container">
			<div class="lewy_d">
				<div>
					<p><br>Date: <br><input  type="text" style="top:200px;" id="datepicker"></p>
					<br>
					
					<br>
				</div>
			</div>
		
			<div class="srodek_d">
			<form  id="myForm" method="POST" name="myForm">
				<input id ="mucha" type="radio" name="dostawca" value="1" /> Mucha
				<input id ="opoka" type="radio" name="dostawca" value="2" checked="checked"/> Opoka
			</form>
			<br>

			<div class="select1">
				<form>
					<select size="18" style="width: 160px" id="order1" name="order1"  > 
  					</select>
					<br/>
					<button id="wyslij" type="button">Zamów</button> 
				</form>
				<br/>

			</div>
			</div>

			<div id="baza" class="prawy_d">
				<p> Lista<br><br></p>
				
				<div class="flex-container">
				<?php
				require "connection.php"; 
				connection();
				if($result = mysqli_query($link,"select * from orders ORDER BY id DESC limit 10")){
					echo "<table class='tableOrder' border='1'><thead><tr ><td width='130px'>data</td><td>dostawca</td><td> numer</td><td> danie</td><td> cena</td></tr></thead>";
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr><td>";
						echo $row["data"];
						echo "</td>";
						echo "<td>";
						echo  $row["dostawca"];
						echo "</td>";
						echo "<td>";
						echo $row["numer"];
						echo "</td>";
						echo "<td>";
						echo $row["danie"];
						echo "</td>";
						echo "<td>";
						echo $row["cena"];
						echo "</td>";
						echo "<tr>";
					}
				}
				mysqli_free_result($result);
				mysqli_close($link);
				echo "</td>
				</tr>
				</table>";
				?>
				
			</div>
		</div>		
	</div>

</body>
</html>  