<?php 
require_once('../Models/alldb.php');

if(isset($_REQUEST['add']))
{
	// $id=$_REQUEST['id'];
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['password'];
	// $name="abd";
	// $address="annn";
	// $id="10";

	if($email=="" && $pass=="")
	{
		echo "Empty";
	}
	else{
		$status= add($id,$name,$email,$pass,$address,$phone);
		if($status)
		{
			header('location:./Views/add.php');
		}
		else
		{
			echo "Error";
		}
	}

}

?>