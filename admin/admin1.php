<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
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
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


</head>
<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 9980310711</a></li>	<li><a href="#"><i ></i> YOUR FOOD COURT ORDER NOW!!</a></li>
 

</li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header_top-->
		

<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Action</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#northindian">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Manage Accounts
										</a>
									</h4>
								</div>
								<div id="northindian" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="newacc.html">Create account </a></li>
											<li><a href="#">Delete account</a></li>
											<li><a href="admin.php">Recharge account </a></li>
											<li><a href="#">View account</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#chinese">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Manage items
										</a>
									</h4>
								</div>
								<div id="chinese" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="menu.php">Add item</a></li>
											<li><a href="test.php">Delete item</a></li>
											<li><a href="edit.php">Edit item</a></li>
											
											
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#Southindian">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Manage Orders
										</a>
									</h4>
								</div>
								<div id="Southindian" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="disp_menu.php">Change status</a></li><li><a href="disp_menu1.php">Deliver orders</a></li>
											<li><a href="#">View Order-Log</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="logout.php">Logout</a></h4>
								</div>
							</div>
							
						</div><!--/category-products-->
					</div>
				</div>
			</div>
		</div>
	</section>
				
<?php
if($_SESSION['start']!=1)
{
	header("location:index.html");
}
?>

<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
