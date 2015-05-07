<?php

//ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="canteen2"; // Database name 
$tbl_name="admin"; // Table name 

// Connect to server and select databse.
$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con,$myusername);
$mypassword = mysqli_real_escape_string($con,$mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($con,$sql);

if (!$result) {
    echo "eeeeeeeeeeeeeeeeeehaaaaaaaaaaaaaaaaa: " . mysqli_error($con);
}

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
echo"username present";
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword"); 

session_start();
$_SESSION['start']=1;
$_SESSION["myusername"]=$myusername;
$_SESSION["mypassword"]=$mypassword;


header("location:admin1.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>
