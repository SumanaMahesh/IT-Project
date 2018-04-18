<?php
session_start();
include '5418.php';
	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];
	
if(isset($_GET['sel'] && ! empty($_GET['sel']))
{
$username=$_GET['sel'];
echo "candidate=".$username;
}
else echo("hello".$_GET['sel']);
 return;
}

$query="update vote=vote+1 where username="$myusername;".$_SESSION['sec'];
//select * from candidate where section=."$_SESSION['sec']";
	$result=mysqli_query($dbh,$query) or die ('error executing the query'.mysqli_error($dbh));
if(mysqli_num_rows($result)!=1) 
   die(" user does not exist");
$row=mysqli_fetch_array($result);

if( $row['password']==$mypassword)
{
 header('Location:ajaxp.html');
 echo ("succcess");
}	
else
 header('Location:login1.html');
?>
