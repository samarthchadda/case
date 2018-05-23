<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
  //getting values form the form
  $username=$_POST['user'];
  $password=$_POST['pass'];

  //to prevent mysql injection
  $username=stripcslashes($username);
  $password=stripcslashes($password);
  $username=mysql_real_escape_string($username);
  $password=mysql_real_escape_string($password);

  //connect to server and database
  mysql_connect("localhost","root","");
  mysql_select_db("student");

  //query the database for user
  $result=mysql_query("select * from register where usern='$username' and pass='$password'")
            or die("Failed to query database".mysql_error());

  $row=mysql_fetch_array($result);
  if($row['usern']==$username && $row['pass']==$password)
  {
    echo "login success  welcome: ".$row['fname'];
   /*
    echo '<form name="Patient" action="result.php" method="POST">';
    echo '<input type="text" name="nname">';
        echo '<input type="submit" name="submit" value="show result">';
      echo '</form>';
    echo '<br><br><a href="result.php">Show ReSult</a>';

   */

  }
  else
  {
    echo "Failed to login";
  }
  






  $nm=$row['fname'];
  $mysqli = new mysqli("localhost", "root", "", "marks");
    if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<br>Connected successfully";




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
  
?>



<br><br>

</body>
</html>