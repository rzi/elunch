<?php
//echo "tableUsers";
//function getTable() {
	require "connection.php";
	connection();
	if($result = mysqli_query($link,"select * from login ORDER BY id DESC ")){
		echo "<table border='1'><thead>
		<tr  >
			<th> usuń</th>
			<th> edycja</th>
			<th>SASA</th>


			<th> Imię</th>
			<th> Nazwisko</th>
			<th> email</th>
			<th> SAP nr.</th>
			<th> Grupa</th>
			<th> typ</th>

		</tr></thead><tbody>";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<td>";
			echo '<a href=\"delEditUser.php?a=del&amp;id='.$row["id"].'>DEL</a>';
			echo "</td> ";
			echo "<td>";
			echo '<a href=\"delEditUser.php?a=edit&amp;id='.$row["id"].'>EDIT</a> ';
			echo "</td>";
			//echo "<tr><td >";
			//echo $row["id"];
			//echo "</td>";
			echo "<td >";
			echo  $row["my_user"];
			echo "</td>";
			//echo "<td>";
			//echo $row["my_pass"];
			//echo "</td>";

			echo "<td>";
			echo $row["my_first_name"];
			echo "</td>";
			echo "<td>";
			echo $row["my_name"];
			echo "</td>";
			echo "<td>";
			echo $row["my_email"];
			echo "</td>";
			echo "<td>";
			echo $row["my_SAP"];
			echo "</td>";
			echo "<td>";
			echo $row["my_group"];
			echo "</td>";

			echo "<td>";
			echo $row["my_type"];
			echo "</td>";

			echo "<tr>";
		}
	}
	mysqli_free_result($result);
	mysqli_close($link);
	echo "</td>
	</tr>
	</body>
	</table>";

//}

?>
