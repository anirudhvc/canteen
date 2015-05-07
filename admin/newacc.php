<?php

//ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="canteen2"; // Database name 
$tbl_name="customer"; // Table name 

// Connect to server and select databse.
$con=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 


$newname=$_POST['fname']; 
$accnum=$_POST['accnumber']; 
$newuname=$_POST['username'];
$newpass=$_POST['pass'];
$newphone=$_POST['phone'];
$sql="SELECT * FROM $tbl_name WHERE username='$newuname' and password='$newpass'";
$result=mysqli_query($con,$sql);

if (!$result) {
    echo "Try another username or account number" ;
}

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
echo"Username exists please try with another username";
else{
$sql="SELECT * FROM $tbl_name WHERE acc_no='$newuname'";
$result=mysqli_query($con,$sql);

if (!$result) {
    echo "Try another username ";
header("location:user_exists.php");
}

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
echo "Account number exists try another";
}
else
{
$sql="INSERT INTO `account`(`acc_id`, `balance`) VALUES ($accnum,0)";

$result=mysqli_query($con,$sql);

if (!$result) {
    echo "Try another account number ";
header("location:user_exists.php");
	}



$sql="INSERT INTO $tbl_name(`cus_id`, `acc_no`, `username`, `password`, `phone`) VALUES ('$newname',$accnum,'$newuname','$newpass',$newphone)";

$result=mysqli_query($con,$sql);

if (!$result) {
    echo "cannot create because there is another user with same username or password " . mysqli_error($con);
}
else 
echo "Success";
}
}
?>
