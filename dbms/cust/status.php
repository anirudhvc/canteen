<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<meta http-equiv="refresh" content="5">
</head>
<style>
tr.spaceUnder > td
{
  padding-bottom: 1em;
}
.main { 
margin: 250px auto; 
width:250px;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canteen2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$cussid=$_SESSION['custid'];
echo"<div class='container'>"."<table class='table table-striped' width='100%'>"."<th>"."ORDERID"."</th>"."<th>"."ITEM_ID"."</th>"."<th>"."QTY"."</th>"."<th>"."STATUS"."</th>";
$sql = "SELECT * FROM order_status WHERE cust_id=$cussid";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) 
	{
		echo"<tr class='spaceUnder'>";echo"<td>" .$row['order_id']."</td>".
		"<td>".$row['item_id']."</td>".
		"<td>".$row['qty']."</td>".
		"<td>".$row['status']."</td>".
		"<tr>";
		}
echo "</table>"."</div>";
echo "<form method='POST'action='cust1.php'>"."<td>"."<input type ='submit' value='Home' >" ."</td>"."</form>"
/*if(mysqli_num_rows($result)==0)
{
	echo "YOUR ORDER IS READY COLLECT IT FROM THE COUNTER";
}
else
{
	echo "KINDLY WAIT.YOUR ORDER IS BEING PREPARED";
}*/
?>
</body>
</html>
