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

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
header("location:index.html");
echo "success";
}


?>
</body>
</html>
