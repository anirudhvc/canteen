<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="canteen2"; // Database name 
	$tbl_name="item"; // Table name 
	$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
	$item=$_POST['item'];
	$price=$_POST['price'];
	//$itid=$_POST['itemid'];
	$adid=$_POST['admin_id'];
	$query="INSERT INTO $tbl_name(`item`, `price`, `ad_id`)
    	VALUES ('$item',$price,$adid)";
	
	if (!mysqli_query($con,$query)) {
	    echo "ssup " . mysqli_error($con);
	}
	else
	{
		echo"menu updated";
		header('location:admin1.php');
	}
		


?>
</body>

</html>
