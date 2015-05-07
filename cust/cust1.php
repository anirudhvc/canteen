<?php
session_start();
?>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style>
tr.spaceUnder > td
{
  padding-bottom: 1em;
}


.container1{

margin-left: 10px;
}
table,tr,td,th {
min-width:50px;
  margin-left: 300px;
   
}
</style>
</head>
<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 9980310711</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> YourFoodCourt.com</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header_top-->

		<div class="container1">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Action</h2>
						
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="disp_menu.php">Order Now!!</a>
									</h4>
										
									
								
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="status.php">Check your order status!!</a>
									</h4>
										
									
								
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="logout.php">Logout</a>	</h4>
								</div>
							</div>
							
						</div><!--/category-products-->
					</div>
				</div>
			</div>
		</div>
	


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
$cussid=$_SESSION['custid'];

$sql = "SELECT * FROM customer WHERE cus_id=$cussid";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   $row=mysqli_fetch_assoc($result);
		echo"<p>"."<div class='container'>"."<table class='table table-striped'";
		echo"<tr class='spaceUnder'>"."<td>'CUS_ID'</td>".
		"<td>".$row['cus_id']."</td>"."</tr>".
		"<tr class='spaceUnder'>"."<td>'NAME'</td>".
		"<td>".$row['username']."</td>"."</tr>"."<tr class='spaceUnder'>"."<td>'acc_no'</td>".
		"<td>".$row['acc_no']."</td>"."</tr>";
		$test=$row['acc_no'];$sql = "SELECT * FROM account WHERE acc_id=$test";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
echo"<tr class='spaceUnder'>"."<td>'BALANCE(in Rs)'</td>";
echo "<td>".$row['balance']."</td>"."</tr>";
		
	echo "</table>"."</div>"."</p>";
	
	 
} else {
    echo "0 results";
}
?>

</body>
</html>
