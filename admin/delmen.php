<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<style>
tr.spaceUnder > td
{
  padding-bottom: 1em;
}
form { 
margin: 250px auto; 
width:250px;
}
</style>
</head>
<body>
<?php 
if($_SESSION['start']!=1)
{
	header("location:index.html");
}
?>
<div class="container">
<form method="POST" action="del_menu.php" class="form-horizontal" role="form">
	DELETE ITEM:
	<table class="table table-hover">
	<tr class="spaceUnder">
	<td>ITEM ID:</td><br/>
	<td><input type="text" name="itemid class="form-control"" "></td>
	</tr>
	<tr class="spaceUnder">
	<td>ENTER ADMIN ID:</td><br/>
	<td><input type="text" name="admin_id class="form-control"" "></td>
	</tr>
	<tr >
	<td><input type="submit" value="DELETE ITEM"><td/>
	</tr>

</table>
</form>
</div>
</body>
</html>
