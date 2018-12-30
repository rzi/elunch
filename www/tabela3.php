<!doctype html>
<html lang="pl-PL">
<head>

</head>
<?php
$date1 = $_POST['d1'];
echo $date1;
require "connection.php";
connection();
    echo "<table id='table2' class='fixed_headers' border='1'><thead><tr ><td>id_user</td><td >Imię</td><td>Nazwisko</td><td> Danie</td></tr></thead>";
echo "<tbody>";

if($result = mysqli_query($link,"select DISTINCT * from login WHERE 1 ")){
    while($row = mysqli_fetch_assoc($result)) {
        $val = $row['id_users'];
        $val2 = $row['my_first_name'];
        $val3 = $row['my_name'];
        echo "<tr><td>";
        echo "<input type='text' name='danie0' value='$val' readonly> ";
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
        echo "</tr>" ;
    }
}
mysqli_free_result($result);
mysqli_close($link);
echo "</td>
        </tr>
        </tbody>
        </table>";

?>

