<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="root"; // Mysql password 
	$db_name="canteen2"; // Database name 
	$tbl_name="item"; // Table name 
	$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
	$itid=$_POST['itemid'];
	$adid=$_POST['admin_id'];
	$query="DELETE FROM $tbl_name WHERE item_id=$itid AND ad_id=$adid";
	mysqli_query($con,$query);
	if (!mysqli_query($con,$query)) {
	    echo "ssup " . mysqli_error($con);
	}
	else
	{
		echo"item deleted";
		header('location:admin1.php');
	}
		


?>
</body>

</html>
