<?php
   function getConnection()
   {
   	$server="localhost";
   	$username="root";
   	$password="";
   	$dbName="abd";
   	$con= new mysqli($server,$username,$password,$dbName);
   	return $con; 
   }
?>