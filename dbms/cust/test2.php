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
		echo"<div class='container'>"."<table class='table table-striped' width='100%'>"."<th>"."ITEMID"."</th>"."<th>"."ITEM"."</th>"."<th>"."price"."</th>"."<th>"."QTY"."</th>"."<th>"."ORDER"."</th>";
		
		
		
	while($row = mysqli_fetch_assoc($result)) 
	{
		echo"<tr class='spaceUnder'>";echo"<td>" .$row['item_id']."</td>".
		"<td>".$row['item']."</td>".
		"<td>".$row['price']."</td>".
		"<form method='POST' action='order.php' >".
		"<td>"."<input type ='text'  size ='1' value='0' name=" . $row[item_id] . " />". 
		"</td>".
		"<td>"."<input type ='checkbox' value='order' id=" . $row[item_id] . " />" ."</td>". 
		
		
		"</tr>";
		}

	echo "<td>"."<input type ='submit' value='order' >"."</form>" ."</td>"."</table>"."</div>";
	
	 
} else {
    echo "0 results";
}
?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
