<?php 
include('../dbconnect.php');
session_start();
if(!isset($_SESSION["sess_user_a"])){
	header("Location:http://admission.akgim.edu.in/admin/index.php");
} else 
{   
	
 	
 	$id=$_GET['id'];
 	$result=mysqli_query($con,"DELETE FROM studentdetails WHERE id='$id'");
 	

}
?>