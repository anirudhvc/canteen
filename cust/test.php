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
$password = "root";
$dbname = "canteen2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM item";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    /*echo"<table width=100%>" ."<tr class='spaceUnder'>".
		"<td>"."ITEMID"."</td>".
		"<td>"."ITEM"."</td>".
		"<td>"."PRICE"."</td>".
		"<td>"."QTY"."</td>"."</tr>"."</table>";*/
		echo"<table width='100%'>"."<th>"."ITEMID"."</th>"."<th>"."ITEM"."</th>"."<th>"."price"."</th>"."<th>"."QTY"."</th>";
		
		
		
	while($row = mysqli_fetch_assoc($result)) 
	{
		echo"<tr class='spaceUnder'>";echo"<td>" .$row['item_id']."</td>".
		"<td>".$row['item']."</td>".
		"<td>".$row['price']."</td>".
		"<form>".
		"<td>"."<input type='text' size='1' value='0' name='test'>".
		"</td>".
		
		"</form>".
		"<tr>";
		}
	echo "</table>";
	echo"<td>"."<input type='submit' value='order'>"."</td>";
	 
} else {
    echo "0 results";
}
?>
</body>
</html>
