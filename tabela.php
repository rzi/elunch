<!doctype html>
<html lang="pl-PL">
<head>
<!--     <link rel="stylesheet" href="/www/css/style.css" type="text/css" >-->

    <link rel="stylesheet" href="/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/www/css/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

    <script src="/www/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="/www/js/dataTables.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="/www/js/skrypt_tabela.js"></script>



</head>
<body>
<?php header('Content-type: text/html; charset=UTF-8'); ?>
<?php
/*$date1 = $_POST['d'];
echo $date1;*/
require "connection.php";
connection();
echo "<table id='table1' class='table_order'  ><thead><tr ><th>id_user</th><th >Imię</th><th>Nazwisko</th><th> Danie</th></tr></thead>";
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
        echo "<input type='text' id='danie33' class='danie'  value=''>";
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
