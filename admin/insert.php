<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="root"; // Mysql password 
	$db_name="canteen"; // Database name 
	$tbl_name="customer"; // Table name 
	$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 
	$name=$_POST['name'];
	$acco=$_POST['acc_no'];
	$pass=$_POST['password'];
	$adr=$_POST['addr'];
	$query="INSERT INTO $tbl_name(`name`, `password`, `acc_no`, `addr`)
    	VALUES ('$name','$pass','$acco','$adr')";
	
	if (!mysqli_query($con,$query)) {
	    echo "ssup " . mysqli_error($con);
	}
	else
	{
		echo"menu updated";
		
	}
		


?>
</body>

</html>
