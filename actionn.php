<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php
	echo "hello manu<br>";
$radioVal = $_POST["gender"];

if($radioVal == "Male")
{
    echo("You chose the first button. Good choice. :D");
}
else if ($radioVal == "Second")
{
    echo("Second, eh?");
}
?>
	

</body>
</html>