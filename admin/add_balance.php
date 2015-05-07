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
	$tbl_name="account"; // Table name 
	$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
	$accid=$_POST['acc_id'];
	$bal=$_POST['balance'];
	$query="SELECT * FROM $tbl_name WHERE acc_id=$accid";
	$result=mysqli_query($con,$query);
	if (!$result) {
	    echo mysqli_error($con);
	}
	if(mysqli_num_rows($result)>0)
	{
		$sql = "UPDATE $tbl_name SET balance=balance+$bal WHERE acc_id=$accid";
		if (mysqli_query($con, $sql)) 
		{
	    		echo "Record updated successfully";
			header('Location:admin1.php');
		} 
		else 
		{
    			echo "Error updating record: " . mysqli_error($con);
		}
	}
?>
</body>

</html>
