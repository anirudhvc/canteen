<?php
session_start();
?>
<html>
<head>
<style>
tr.spaceUnder > td
{
  padding-bottom: 1em;
}
form { 
margin: 250px auto; 
width:250px;
}
</style>
</head>
<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen2";
$cusid=$_SESSION['custid'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
	$query="SELECT * FROM order_l WHERE cus_id=$cusid";
	$result=mysqli_query($conn, $query);
	$var=mysqli_num_rows($result);
	echo "YOUR ORDER ID'S ARE"."<br>";
	while($row = mysqli_fetch_assoc($result)) 
	{
		echo $row['order_id']."<br>";	
	}
}
?>
</body>
</html>
