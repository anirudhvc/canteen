<html>
<head>
</head>
<body>

<? 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canteen2";
$name=$_POST['item'];
$price=$_POST['price'];
echo $name.$price;
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query="SELECT * FROM item WHERE item='$name'";
$result = mysqli_query($conn, $query);
if (!$result) {
	    echo "ssup " . mysqli_error($con);
	}
	if(mysqli_num_rows($result)>0)
	{
		$sql = "UPDATE item SET price=$price WHERE item='$name'";
		if (mysqli_query($conn, $sql)) 
		{
	    		echo "Record updated successfully";
			header('Location:admin1.php');
		} 
		else 
		{
    			echo "Error updating record: " . mysqli_error($con);
		}
	}
//header('Location:admin1.php');

?>
