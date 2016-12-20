<?php
include('dbconnect.php');
if(isset($_POST['submit_confirm']))
{
  $email=$_POST['email'];
  
  $query=mysqli_query($con,"UPDATE studentdetails SET verified='1' where md5(email)='$email'");
  if($query){


  	$message = "Your email has been verified and your registration form has been submitted successfully";
	echo "<script type='text/javascript'>alert('$message');</script>";
	header('Refresh:0;url=http://www.akgim.edu.in');
  	//echo "Your email has been verified and your registration form has been submitted successfully";
  }
}
?>