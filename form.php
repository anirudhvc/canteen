
<html>
<body>
<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$name=$_POST["name"];
	// check if name only contains letters and whitespace
  if(!empty($_POST["name"])){
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
    {
      echo'<script>'.'alert("Only letters and white space allowed")'.'</script>';
	
    }
  }
  else
  {
   // $NameErr = "Please enter this field";
  }
	
   
}  


?>

</body>
</html>

