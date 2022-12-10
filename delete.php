<?php 
include 'connect.php';
if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];
  $sql="DELETE FROM `store4` WHERE id =$id";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo " successfully deleted ";
  	header('location:admin.php');
  }
 else {
 	 echo"error"."".mysqli_errno($result);}


}

?>
