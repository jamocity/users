<?php 
include 'connect.php';
if(isset($_POST['login'])){
  $username=$_REQUEST["username2"];
  #$username=$_GET['user'];
   $name=$_POST['username2'];
   $password=$_POST['password2'];
   
  $query="SELECT * FROM store4 WHERE password = '$password' AND  username='$name'";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)==1){   
  $row = $result->fetch_assoc();
   $username=$row['username'];
     $email=$row['email'];
    $contact=$row['contact'];
    $gender=$row['gender'];

    echo "welcome back please use this link to access your account";
    echo "<a href='admin.php?username=$username&email=$email&contact=$contact&gender=$gender'>  click here </a>";
    
  }
  else {
	  echo "oops you don't have an account yet please create an account first"; 
	  //header("location:admin.php");
	   
	}}

mysqli_close($conn);





