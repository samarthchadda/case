<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    $mysqli = new mysqli("localhost", "root", "", "marks");
    if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<br>Connected successfully";
$name = mysqli_real_escape_string($mysqli, $_REQUEST['fname']);
$se = mysqli_real_escape_string($mysqli, $_REQUEST['se']);
$mp = mysqli_real_escape_string($mysqli, $_REQUEST['mp']);
$spt = mysqli_real_escape_string($mysqli, $_REQUEST['spt']);
$dms = mysqli_real_escape_string($mysqli, $_REQUEST['dms']);
$ppl = mysqli_real_escape_string($mysqli, $_REQUEST['ppl']);
$poc = mysqli_real_escape_string($mysqli, $_REQUEST['poc']);
$total=$se+$mp+$spt+$dms+$ppl+$poc;
$perc=(($total)/6);
echo "<br>sum is :$total";
echo "<br>Percentage is :$perc";
$sql = "INSERT INTO marksentry (name,se,mp,spt,dms,ppl,poc,total,perc) VALUES ('$name', '$se','$mp','$spt','$dms','$ppl','$poc','$total','$perc')";
if(mysqli_query($mysqli, $sql)){
    echo "<h1><br>Records added successfully.</h1>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
 




// Make a MySQL Connection
 ?>
</body>
</html>