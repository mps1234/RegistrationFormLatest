<?php 
session_start();
if(isset($_SESSION["sess_user_a"]))
{
unset($_SESSION['sess_user_a']);
session_destroy();
}

header("Location:index.php");
?>
