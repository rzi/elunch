<!doctype html>
<html lang="pl-PL">
<head>
<script type="text/javascript" src="/www/www/js/skrypt_table3.js"></script>
</head>
<body>
<!--<?php header('Content-type: text/html; charset=UTF-8'); ?>-->
<?php
//$date1 = $_POST['d'];
//echo $date1;
require "connection.php";
connection();
echo "<table id='table3' style='width:100%;' border='0'><thead><tr style='width:98%;'><th style='width:15%;'>id_user </th><th style='width:25%;'>Imię</th><th style='width:25%;'>Nazwisko</th><th style='width:35%;'> Danie</th></tr></thead>";

echo "<tbody>";

    if($result = mysqli_query($link,"select DISTINCT * from login WHERE 1 ")){
    while($row = mysqli_fetch_assoc($result)) {
        $val = $row['id_users'];
        $val2 = $row['my_first_name'];
        $val3 = $row['my_name'];
        echo "<tr><td  style='width:15%;'>";
        echo "<input type='text' style='width:100%;' name='danie0' value='$val' readonly> ";
        echo "</td>";
        echo "<td  style='width:25%;'>";
        echo "<input type='text' style='width:100%;' name='danie1' value='$val2' readonly>";
        echo "</td>";
        echo "<td  style='width:25%;'>";
        echo "<input type='text' style='width:100%;' name='danie2' value='$val3' readonly>";
        echo "</td>";
        echo "<td style='width:35%;'>";
        echo "<input type='text' style='width:100%;' id='danie33' class='danie'  value=''>";
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
