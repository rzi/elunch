<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
require "connection.php";
connection();

mysqli_select_db($link ,"orders");
$sql="SELECT * FROM orders WHERE id = '".$q."'";
$result = mysqli_query($link ,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['danie'] . "</td>";
    echo "<td>" . $row['cena'] . "</td>";
    echo "<td>" . $row['cena'] . "</td>";
    echo "<td>" . $row['cena'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($link);
?>
</body>
</html>
