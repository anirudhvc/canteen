<?php include form.php?>
<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
<h2>Enter The Customer Details</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="form.php"> 
   Name: <input type="text" name="name">*
   <span class="error"></span>
   <br><br>
   Password: <input type="password" name="password">*
   <span class="error"></span>
   <br><br>
   AccountNo: <input type="text" name="acc_no">*
   <span class="error"></span>
   <br><br>
   Address: <textarea name="addr" rows="5" cols="40"></textarea>*
   <br><br>
 
   <input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>
