<?php
   require_once('db.php');

   function auth($email,$pass)
   {
      $con=getConnection();
      $sql="select * from ab where Email='{$email}' 
      and  password='{$pass}'";

      $result= mysqli_query($con,$sql); 
      $count= mysqli_num_rows($result);
      if($count==1)
      {
         return true;
      }
      else
      {
         return false;
      }

   }
   function add($id,$name,$email,$password,$address,$phone)
   {
      $con=getConnection();
      $sql= "INSERT INTO abc VALUES('{$id}','{$name}','{$email}','{$password}','{$address}','{$phone}')";
      $result=mysqli_query($con,$sql);
      if($result)
      {
         return true;
      }
      else
      {
         return false;
      }

   }
   function customer_Details()
   {
      $con=getConnection();
      $sql="SELECT * from abc";
      $result=mysqli_query($con,$sql);
      if($result)
      {
         return $result;
      }
      else
      {
         echo " Error";
      }

   }

function edit($id)

 {
      $con=getConnection();
      $sql="select * from abc where Id='{$id}'";

      $result= mysqli_query($con,$sql); 
      return $result; 
      
       }

       function update($update_id,$name,$password,$address)
   {
      $con=getConnection();
      
      $sql= "UPDATE abc SET Name='{$name}',password='{$password}',Address='{$address}' where Id='{$update_id}'";
      

      $result=mysqli_query($con,$sql);
      if($result)
      {
         return true;
      }
      else
      {
         return false;
      }

   }
   function delete($id)
   {
       $con = getConnection();
       $sql = "DELETE FROM abc WHERE Id='{$id}'";
   
       $result = mysqli_query($con, $sql);
   
       if ($result) {
           return true;
       } else {
           return false;
       }
   }


?>