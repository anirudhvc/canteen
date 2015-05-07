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
.main { 
margin: 250px auto; 
width:250px;
}
table, th, td {
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
$flag=1;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM item";
$result = mysqli_query($conn, $sql);
$a=mysqli_num_rows($result);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
for($i=0;$i<=$a;$i++)
{
		
	if($_POST[$i]>0)
	{
		$id=$i;	
		$flag=1;
		$qty=$_POST[$i];
	}
}


	$sql = "SELECT * FROM item WHERE item_id=$id";
	$result = mysqli_query($conn, $sql);
	$_SESSION['qty']=$qty;
	$_SESSION['id']=$id;
	if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$_SESSION['price']=$row['price']*$qty;
	echo "YOUR ORDER IS".'<br>';
	echo "<table width='100%'>"."<th>"."ITEMID"."</th>"."<th>"."ITEM"."</th>"."<tr class='spaceUnder'>";
	echo"<td>" .$row['item_id']."</td>".
	"<td>".$row['item']."</td>"."</tr>".
	"<td>"."AMOUNT TO BE PAID"."<pre>"."   "."</pre>"."Rs"." ".$row['price']*$qty."</td>".
	"<td>"."<form action='finalor.php'>"."<input type ='submit' value='PROCEED TO PAY' >" ."</form>"."</td>"."</table>"; 
	}
else
{echo "not working";}

?>
