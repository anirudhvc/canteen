<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>ADMIN_HOME</title>
<style>
form { 
margin: 250px auto; 
width:250px;
}
.admin
{
	background-color:#0ca3d2;	
}
tr.spaceUnder > td
{
  padding-bottom: 1em;
}
</style>
</head>
<body class="admin">
<?php
if($_SESSION['start']!=1)
{
	header("location:index.html");
}
?>
<div class="acc">
<form method="POST" action="add_balance.php">
<section class="container">

 <table style="width:100%">
  <tr class="spaceUnder">
     <td>ACCOUNT</td> 	
    <td><input type="text" name="acc_id" width="100%" align="center"></td>
  </tr>
  <tr>
        <td>AMOUNT</td> 	
   <td><input type="text" name="balance" width="100%" align="center"></td>
  </tr>
  <tr>
         	
   <td><input type="submit" value="UPDATE" width="100%" align="center"></td>
  </tr>
</table>
</div> 


</body>
</html> 
