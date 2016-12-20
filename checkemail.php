<?php 
include('dbconnect.php');

	$emailId=$_GET['email'];
	$checkdata="SELECT * FROM studentdetails WHERE email='$emailId'";
	$query=mysqli_query($con,$checkdata);
	
	
	$result=mysqli_num_rows($query);
	
	if($result>0)
	{
		echo 'Email Already Exist';
	}
	else
	{
		echo 'OK';
	}


?>