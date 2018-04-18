<?php
	include 'config.php';
	$myusername = $_POST['username'];
	$mypassword = $_POST['password']; 
	if(isset($_GET['sel'] && ! empty($_GET['sel']))
	   {
		   $username=$_GET['sel'];
		   echo "candidate=".$username;
	   }
	   else echo ("Hello".$_GET
	$query = "select * from login where username = \"$myusername\"" ;
	$result = mysqli_query($dbh,$query) 
		or die ('Error executing the query' .mysqli_error($dbh));
	if($mysqli_num_rows($result)!= 1)
		die("User doesn't exist");
		$row=mysqli_fetch_array($result);
	if($row['password']==$mypassword)
	{
		header("location: vote.html");
		echo("Success!");
	}
	else
	{	
		header("location: login.html");
	} 
?>
