<?php
session_start();
?>
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
<?php if($_SESSION['start']!=1)
{
	header("location:index.html");
}
?>
<form method="POST" action="edit_menu.php">
	EDIT ITEM:
	<table>
	<tr class="spaceUnder">
	<td>ITEM ID:</td><br/>
	<td><input type="text" name="itemid" "></td>
	</tr>
	<tr class="spaceUnder">
	<td>NEW PRICE:</td><br/>
	<td><input type="text" name="price"></td>
	</tr>
	<tr >
	<td><input type="submit" value="CHANGE PRICE"><td/>
	</tr>

</table>
</body>
</html>
