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


$nm=$_POST['nname'];

 // echo "<br><br>DATA:";
 echo "<br><h1>Your Result Is:-</h1><br>";
 $sql = "SELECT *  FROM marksentry where name='$nm'";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - Name: " . $row["name"]. "<br>-SE: " . $row["se"]. "<br><br>"."-MP:".$row["mp"]."<br><br>"."-SPT:".$row["spt"]."<br>"."<br><br>"."-DMS:".$row["dms"]."<br>"."<br><br>"."-PPL:".$row["ppl"]."<br>"."<br><br>"."-POC:".$row["poc"]."<br>"."<br><br>"."-TOTAL:".$row["total"]."<br>"."<br><br>"."-PERCENTAGE:".$row["perc"];
    }
} else {
    echo "0 results";
}



// Make a MySQL Connection
 ?>

</body>
</html>