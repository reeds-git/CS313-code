<?php
$baseDir = "/cs313-php/web/myWeb/";
echo "<!DOCTYPE html>
<html>
<head>
	<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"$baseDir"."styleSheets/style.css\">
	<title>test</title>
</head>
<body>";

	
echo 	$_SERVER['PHP_SELF'];
echo "<br>\n";
echo basename($_SERVER['PHP_SELF'],".php");

echo "</body>
</html>";

?>

