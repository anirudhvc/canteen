<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
<form method="POST" action="add_menu.php">
	<table>
	
	<tr class="spaceUnder">
	<td>ADD ITEM:<br/></td>
	<td><input type="varchar" name="item"></td>
	</tr>
	
	<tr class="spaceUnder">
	<td>SET PRICE:</td><br/>
	<td><input type="int" name="price"> </td>
	</tr>
	<tr class="spaceUnder">
	<td>SET ID:</td><br/>
	<td><input type="int" name="itemid" "></td>
	</tr>
	<tr class="spaceUnder">
	<td>ENTER ADMIN ID:</td><br/>
	<td><input type="int" name="admin_id" "></td>
	</tr>
	<tr >
	<td><input type="submit" value="Update MENU"><td/>
	</tr>

</table>
</body>
</html>
