<!DOCTYPE html>
<html>
<head>

<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="styleee.css" rel="stylesheet" type="text/css">
<style>
*{
	margin: 0;
    padding:0;
}
.maindiv {
margin:0 auto;
width:980px;
height:500px;
background:#fff;
padding-top:8px;
font-size:14px;
font-family:'Droid Serif',serif
}
.title {
width:100%;
height:70px;
text-shadow:2px 2px 2px #cfcfcf;
font-size:16px;
text-align:center;
font-family:'Droid Serif',serif
}
.divA {
width:90%;
float:left;
margin-top:30px
}
.form {
width:500px;
float:left;
background-color:	#9370DB;
font-family:'Droid Serif',serif;
padding-left:30px
}
.divB {
width:100%;
height:100%;
background-color:	#9370DB;
border:dashed 1px #999
}
.divD {
width:220px;
height:480px;
padding:0 22px;
float:left;
background-color:#FFE4E1;
border-right:dashed 1px #999
}
p {
text-align:center;
font-weight:700;
color:#5678C0;
font-size:29px;
text-shadow:2px 2px 2px #cfcfcf
}
.form h2 {
text-align:center;
text-shadow:2px 2px 2px #cfcfcf
}
a {
text-decoration:none;
font-size:16px;
margin:2px 0 0 30px;
padding:3px;
color:#1F8DD6
}
a:hover {
text-shadow:2px 2px 2px #cfcfcf;
font-size:18px
}
.clear {
clear:both
}
span {
font-weight:700;
}
	#button{
              border-radius:10px;
               width:110px; 
               height:40px;
                background:  #6495ED; 
                font-weight:bold; 
                font-size:22px;

            }

            .manu{
            	background-color: transparent;
            	height: 230px;
            	width: 110px;
            	position: absolute;
            	left: 60px;
            	top: 150px;

            }
            table,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            #dd{
                font-size: 45px;
                border-bottom: 2px solid red;
            }
	</style>
</style>
</head>
<body>

<div class="maindiv">
<div class="divA">
<div class="title">
<h2 id="dd">RESULT OF STUDENTS</h2>
</div>

<div class="divB">
<div class="divD">
<p>--Select Student--</p><br><br>

<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("marks", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from marksentry", $connection);
/*
while ($row = mysql_fetch_array($query)) {
    echo "<table>";
echo "<tr><td><b><a href=\"showresult.php?name={$row['name']}\">{$row['name']}</a></b></td></tr></table>";
echo "<br />";
}
*/
while ($row = mysql_fetch_array($query)) {
    
echo "<b><a href=\"showresult.php?name={$row['name']}\">{$row['name']}</a></b><hr>";
echo "<br />";
}
?>
</div>

<?php
if (isset($_GET['name'])) {
$name = $_GET['name'];
$query1 = mysql_query("select * from marksentry where name='$name'", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>

<div class="form">
<h2 style="font-size: 30px">---Result---</h2><br>
<!-- Displaying Data Read From Database -->
<span style="font-size: 22px">Name:  </span> <b><?php echo $row1['name']; ?><br><br>
<span style="font-size: 22px">SE:</span> <?php echo $row1['se']; ?><br><br>
<span style="font-size: 22px">MP:</span> <?php echo $row1['mp']; ?><br><br>
<span style="font-size: 22px">SPT:</span> <?php echo $row1['spt']; ?><br><br>
<span style="font-size: 22px">DMS:</span> <?php echo $row1['dms']; ?><br><br>
<span style="font-size: 22px">PPL:</span> <?php echo $row1['ppl']; ?><br><br>
<span style="font-size: 22px">POC:</span> <?php echo $row1['poc']; ?><br><br>
<span style="font-size: 22px">Total:</span> <?php echo $row1['total']; ?><br><br>
<span style="font-size: 22px">Percentage:</span> <?php echo $row1['perc']; ?><br><br>


</div>

<?php
}
}
?>



<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="manu">
<br><br><br><br><br><br><br><form method="POST" action="..\index.html">
	<tr>
	   	 				 		   <td>
	   	 				 		   	<input id="button" type="submit" name="submit" value="HOME"></td> 
	   	 				 		   </tr>
</form><br>
<form method="POST" action="..\faculty login\faculty.html">
	<tr>
	   	 				 		   <td>
	   	 				 		   	<input id="button" type="submit" name="submit" value="SIGNOUT"></td> 
	   	 				 		   </tr>
</form>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>

</body>
</html>