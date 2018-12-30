<html>
<head>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>
<body>
 <form>
  <input id="target" type="text" value="Field 1">
  <input type="text" value="Field 2">
</form>
<div id="other">

</div>
<script>

$( "#target" ).blur(function() {
  alert( "Handler for .blur() called." );
});
</script>
</body>
</html>
