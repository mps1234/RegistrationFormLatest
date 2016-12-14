<?php 
session_start();
if(!isset($_SESSION["sess_user_a"])){
	header("Location:index.php");
} else 
{   
	$server = "localhost"; 
	$user = "root";
 	$password = "";
 	$database = "akgim-registration"; 
 	$con=mysqli_connect($server,$user,$password,$database) or die ("Connection Fails"); 
 	
 	$id=$_GET['id'];
 	$result=mysqli_query($con,"DELETE FROM studentdetails WHERE id='$id'");
 	

}
?>