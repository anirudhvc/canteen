<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted
	$sql = "SELECT * FROM order_status ORDER BY order_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$j=$row['order_id'];
	$sql = "SELECT * FROM order_status ORDER BY order_id ASC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$k=$row['order_id'];
	
	for($i=$k;$i<=$j;$i++)
    if (isset($_POST[$i])) {
		$var=$i;
		break;    
	}
}

$sql="DELETE FROM  `order_status` WHERE order_id =$var";
mysqli_query($conn, $sql);






?>
