<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style>

#stylized input{
    display: block;
    font-size:11px;
    padding:4px 2px;
    border:solid 1px #aacfe4;
    width:100px;
    margin:25px 0 20px 10px;
}
</style>
</head>
<body>

<? 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "canteen2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$q = 'SELECT * FROM item';
$result = mysqli_query($conn, $q);
echo'<div id="stylized" class="myform">'."<form method='POST' action='new1.php'>";
echo '<select name="item" class="form-control">';

while ($row = mysqli_fetch_assoc($result)) 
{   
    echo '<td>'.'<option value="' . $row['item'] . '">' . $row['item'] .'</td>'.'</option>'."\n";
}

echo '</select>'.'</div>';
echo '<div id="stylized" class="myform">'."Enter Price"."<input type='text' name='price'>"."</div>";
echo "<input type='submit' value='edit'>"."</form>".'</div>';

mysqli_free_result($result); // free up the results
?>
</body>

</html>
