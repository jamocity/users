<?php 
include 'connect.php';
if(isset($_GET['deleteid2'])){
  $id=$_GET['deleteid2'];
  $sql="DELETE FROM `store6` WHERE id =$id";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo " successfully deleted ";
  	header('location:admin.php');
  }
 else {
 	 echo"error"."".mysqli_errno($result);}


}

?>
