<!doctype html>
<html lang="pl-PL">
<head>
<script type="text/javascript" src="/www/js/skrypt_table.js"></script>
</head>
<body>
<!--<?php header('Content-type: text/html; charset=UTF-8'); ?>-->
<?php
$date1 = $_POST['d'];
//echo $date1;
require "connection.php";
connection();
echo "<table id='table1'  border='1'><thead><tr ><td style='width:60px;'>id_user </td><td style='width:80px;'>Imię</td><td style='width:80px;'>Nazwisko</td><td> Danie</td></tr></thead>";

echo "<tbody>";

    if($result = mysqli_query($link,"select DISTINCT * from login WHERE 1 ")){
    while($row = mysqli_fetch_assoc($result)) {
        $val = $row['id_users'];
        $val2 = $row['my_first_name'];
        $val3 = $row['my_name'];
        echo "<tr><td>";
        echo "<input type='text' style='width:60px;' name='danie0' value='$val' readonly> ";
        echo "</td>";
        echo "<td>";
        echo "<input type='text' style='width:80px;' name='danie1' value='$val2' readonly>";
        echo "</td>";
        echo "<td>";
        echo "<input type='text'  style='width:80px;' name='danie2' value='$val3' readonly>";
        echo "</td>";
        echo "<td>";
        echo "<input type='text'  id='danie33' class='danie'  value=''>";
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
</body>
</html>
