<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
tr.spaceUnder > td
{
  padding-bottom: 10em;
}
.main { 
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
<table class="spaceUnder" >
<tr>
<td>
<form  action="edit.php">
	<input type="submit" value="EDIT ITEM">
</form>
</td>
</tr>
<tr>
<td>
<form  action="admin.php">
	<input type="submit" value="MANAGE ACCOUNTS">
</form>
</td>
</tr>
<tr>
<td>
<form  action="test.php">
	<input type="submit" value="DELETE ITEM">
</form>
</td>
</tr>
<tr>
<td>
<form  action="menu.php">
	<input type="submit" value="ADD ITEM">
</form>
</td>
</tr>
<tr>
<td>
<form  action="disp_menu.php">
	<input type="submit" value="VIEW ORDERS">
</form>
</td>
</tr>
<tr>
<td>
<form  action="logout.php">
	<input type="submit" value="LOGOUT">
</form>
</td>
</tr>
</table>
</body>
</html>
