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
<style>
tr.spaceUnder > td
{
  padding-bottom: 1em;
}
.main { 
position: absolute:
    top: 50%;
}
table,tr,td,th {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
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

$sql = "SELECT * FROM customer WHERE cus_id=$cussid";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   $row=mysqli_fetch_assoc($result);
		echo"<p>"."<div class='container'>"."<table class='table table-striped'";
		echo"<tr class='spaceUnder'>"."<td>'CUS_ID'</td>".
		"<td>".$row['cus_id']."</td>"."</tr>".
		"<tr class='spaceUnder'>"."<td>'NAME'</td>".
		"<td>".$row['username']."</td>"."</tr>"."<tr class='spaceUnder'>"."<td>'acc_no'</td>".
		"<td>".$row['acc_no']."</td>"."</tr>";
		$test=$row['acc_no'];$sql = "SELECT * FROM account WHERE acc_id=$test";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
echo"<tr class='spaceUnder'>"."<td>'BALANCE(in Rs)'</td>";
echo "<td>".$row['balance']."</td>"."</tr>";
		
	echo "</table>"."</div>"."</p>";
	
	 
} else {
    echo "0 results";
}
?>
<div class=main><form method="POST" action="disp_menu.php"><input type="submit" value="order"></form></td>
<td><form method="POST" action="status.php"><input type="submit" value="orderstatus"></form></div>
<td><form method="POST" action="logout.php"><input type="submit" value="logout"></form></div>
</body>
</html>
