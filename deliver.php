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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //something posted
	$sql = "SELECT * FROM order_h ORDER BY order_id DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$j=$row['order_id'];
	
	
	$sql = "SELECT * FROM order_h ORDER BY order_id ASC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$k=$row['order_id'];
	
	
	for($i=$k;$i<=$j;$i++)
    if (isset($_POST[$i])) {
		$var=$i;
		break;    
	}
	
	
}
$sql = "SELECT `item_id`,`quantity` FROM order_h WHERE 'order_id'=$var";
mysqli_query($conn, $sql);
$itemsid=$row['item_id'];
	$quant=$row['qty'];
	
	$sql = "SELECT `cus_id`,`order_id` FROM order_l WHERE 'order_id'=$var";
	mysqli_query($conn, $sql);
	$cusid=$row['cus_id'];
	
	$sql="INSERT INTO `order_log`(`order_id`, `cus_id`,`item_id`,`quantity`) VALUES ($var,$cusid,$itemsid,$quant)";

$result=mysqli_query($conn,$sql);
if (!$result) {
    echo "eeeeeeeeeeeeeeeeeehaaaaaaaaaaaaaaaaa: " . mysqli_error($conn);
}


	
	
$sql="DELETE FROM  `order_h` WHERE order_id =$var";
mysqli_query($conn, $sql);
$sql="DELETE FROM  `order_l` WHERE order_id =$var";
mysqli_query($conn, $sql);





?>
