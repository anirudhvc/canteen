<?php
ob_start();
session_start();
//required for start of every session

$user=$_POST['uname'];
$pass=$_POST['pass'];
//required values are in the user and pass variables

$con=mysqli_connect("localhost","root","root","timetable");

//connection with db established

$username = mysqli_real_escape_string($con,$user);
$query1 = "SELECT username, pw FROM login WHERE username = '$user';";
$query2 = "SELECT usn, pw FROM student WHERE usn = '$user';";
$query3 = "SELECT initials, pw FROM staff WHERE initials = '$user';";


 
$result1 = mysqli_query($con,$query1);
$result2 = mysqli_query($con,$query2);
$result3 = mysqli_query($con,$query3);

if(mysqli_num_rows($result1) == 0 && mysqli_num_rows($result2) == 0 && mysqli_num_rows($result3) == 0) // User not found. So, redirect to login_form again.
{
	echo "Username invalid!Redirecting to login page.Please wait....";
	header('Refresh:2,url= login.php');
}//redirect to login for failed login
else
{
	if(mysqli_num_rows($result1) != 0)
	{
		$row = mysqli_fetch_array($result1);
		if($row["username"]==$user && $row["pw"]==$pass)
		{
			echo"You are a validated user.";
			session_regenerate_id();
			$_SESSION['sess_user_id'] = $row['pw'];
			$_SESSION['sess_username'] = $row['username'];
			session_write_close();
			header('Refresh:0,url= index.php');
		}//redirect to index for successful login
		else
		{
			echo "Credentials not correct...Please wait";
			header('Refresh:2 ,url= login.php');
		}
	}//redirect to login for failed login

	if(mysqli_num_rows($result2) != 0)
	{
		$row = mysqli_fetch_array($result2);
		if($row["usn"]==$user && $row["pw"]==$pass)
		{
			echo"You are a validated user.";
			session_regenerate_id();
			$_SESSION['sess_user_id'] = $row['pw'];
			$_SESSION['sess_username'] = $row['usn'];
			session_write_close();
			header('Refresh:0,url= index_student.php');
		}//redirect to index for successful login
		else
		{
			echo "Credentials not correct...Please wait";
			header('Refresh:2 ,url= login.php');
		}
	}//redirect to login for failed login

	if(mysqli_num_rows($result3) != 0)
	{
		$row = mysqli_fetch_array($result3);
		if($row["initials"]==$user && $row["pw"]==$pass)
		{
			echo"You are a validated user.";
			session_regenerate_id();
			$_SESSION['sess_user_id'] = $row['pw'];
			$_SESSION['sess_username'] = $row['initials'];
			session_write_close();
			header('Refresh:0 ,url= index_teacher.php');
		}//redirect to index for successful login
		else
		{
			echo "Credentials not correct...Please wait";
			header('Refresh:2 ,url= login.php');
		}
	}//redirect to login for failed login
}
?>
