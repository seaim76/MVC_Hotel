<?php 
require_once('../Models/alldb.php');

if(isset($_REQUEST['submit']))
{
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];


		$status= auth($email,$pass);
		if($status)
		{
			header('location:../Views/admin.php');
		}
		else
		{
			header('location:../Views/login.php');
		}
	}


?>