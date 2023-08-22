<?php 
require_once('../Models/alldb.php');

if(isset($_REQUEST['add']))
{
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$password=$_REQUEST['pass'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];


		$status= add($id,$name,$email,$password,$address,$phone);
		if($status)
		{
			header('location:../Views/customer_Details.php');
		}
		else
		{
			echo "Please Enter all information";
		}
	}

	if(isset($_REQUEST['edit']))
	{
		$edit_id=$_REQUEST['edit'];
		$res=edit($edit_id);
		//include '../Views/edit.php';
		//header('location:../Views/edit.php/{"$edit_id"}');
		header('location:../Views/edit.php?edit='.$edit_id);
		 
	
		exit();
	}
	
	if(isset($_REQUEST['update']))
{
    $name=$_REQUEST['name'];
    $password=$_REQUEST['pass'];
    $address=$_REQUEST['address'];
	

    $update_id=$_REQUEST['update'];
    $res= update($update_id,$name,$password,$address);
    if($res)
        {
            header('location:../Views/customer_Details.php');
        }
        else
        {
            echo "Error";
        }

}

if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['delete'];
    
    $deleted = delete($id);

    if ($deleted) {
        header('Location: ../Views/customer_Details.php');
        exit();
    } else {
        echo "Error deleting record.";
    }
}



?>
