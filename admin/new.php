<html>
<head>
</head>
<body>

<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen2";
$name=$_POST['item'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
$q = "DELETE FROM item WHERE item='$name'";
$result = mysqli_query($conn, $q);
header('Location:admin1.php');

?>
