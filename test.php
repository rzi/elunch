<?php
				echo "test";
				echo "<br>";
				require "connection.php"; 
				connection();
				if($result = mysqli_query($link,"select * from orders")){
					
					while($row = mysqli_fetch_assoc($result)) {
						echo $row["id"].  $row["danie"]. " " . $row["cena"]. "<br>";
					}
				}
				mysqli_free_result($result);
				
?>