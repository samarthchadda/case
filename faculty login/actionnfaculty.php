<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php
	
$conn = new mysqli('localhost', 'root', '', 'faculty');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "<br>Connected successfully";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$country=$_POST['country'];



 	$sql = "INSERT INTO register (fname, lname, usern, pass, country) VALUES ('$fname', '$lname', '$username','$password','$country')";
if(mysqli_query($conn, $sql)){
    echo "<br>Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);
	
?>
</body>
</html>