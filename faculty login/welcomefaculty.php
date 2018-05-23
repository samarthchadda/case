<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
  //getting values form the form
  $username=$_POST["username"];
  $password=$_POST["password"];

  //to prevent mysql injection
  $username=stripcslashes($username);
  $password=stripcslashes($password);
  $username=mysql_real_escape_string($username);
  $password=mysql_real_escape_string($password);

  //connect to server and database
  mysql_connect("localhost","root","");
  mysql_select_db("faculty");

  //query the database for user
  $result=mysql_query("select * from register where usern='$username' and pass='$password'")
            or die("Failed to query database".mysql_error());

  $row=mysql_fetch_array($result);
  if($row['usern']==$username && $row['pass']==$password)
  {
    echo "login success  welcome ".$row['fname'];
     echo '<br><br><a href="marks.html">Enter marks of Students</a>';
     echo '<br><br><a href="showresult.php">Show ReSult of students</a>';


  }
  else
  {
    echo "Failed to login";
  }


  
  
  
?>
<br><br>

</body>
</html>