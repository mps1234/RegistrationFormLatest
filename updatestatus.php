<!DOCTYPE html>
<html>
<body>

<?php

include('dbconnect.php');
if(isset($_POST['submit_confirm']))
{
  $email=$_POST['email'];
  
  $query=mysqli_query($con,"UPDATE studentdetails SET verified='1' where md5(email)='$email'");
  if($query){

?>

	<script src="src="https://code.jquery.com/jquery-2.1.1.min.js""></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>swal('Your email has been verified and your registration form has been submitted successfully');</script>
  	<?php
  	header('Refresh:5;url=http://www.akgim.edu.in');
  }
}
?>


