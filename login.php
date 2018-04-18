<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $query = "SELECT username FROM login WHERE username = \"$myusername\"" ;
      $result = mysqli_query($dbh,$query) 
		or die ('Error executing the query' .mysqli_err($dbh));
	//$row['id'] $row['password']	
      if($mysqli_num_rows($result)!= 1)
	die("User doesn't exist");
	$row=mysqli_fetch_array($result);
	if($row['password']==$mypassword)
	{
		header("location: welcome.php");
		echo("Success!");
 	}
	else
	{
		header("location: login.html");
	}
   
?>
