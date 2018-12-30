<?php echo "test";?>
<!doctype html>
<html>
<head>
    <title>Schneider Parametry</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css" type="text/css"/>
</head>
<body>
<h1>Paramertry </h1>  
<br>
<div> 
<p> dopłata SEIP: </p>
<?php
require "connection.php"; 
connection();  
$query = "select * from parametry";
 
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
             echo $row['dofinansowanie'];
     }
}
mysqli_close($link);

?>
</div>
</body>
</html>