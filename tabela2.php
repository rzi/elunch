<?php
$date1 = $_POST['d1'];
echo $date1;
require "connection.php"; 
connection();
echo "<table id='table2' class='fixed_headers_d' border='1'><thead><tr ><td>Imię</td><td >Nazwisko</td><td>Dostawca</td><td> Danie</td> </tr></thead>";
echo "<tbody>";
if($result = mysqli_query($link,"select * from login, orders WHERE data='$date1'  and login.id_users = orders.id_users order by dostawca ASC")){

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>";
        echo $row["my_first_name"];
        echo "</td>";
        echo "<td>";
        echo  $row["my_name"];
        echo "</td>";
        echo "<td>";
        echo $row["dostawca"];
        echo "</td>";
        echo "<td>";
        echo $row["numer"];
        echo "</td>";
        echo "<tr>";
    }
}
mysqli_free_result($result);
mysqli_close($link);
echo "</td>
                                        </tr>
                                        </tbody>
                                        </table>";                                       

?>