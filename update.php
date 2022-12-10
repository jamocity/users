<?php
  $server="localhost";
  $password="";
  $dbname="datastore";
  $username="root";
  
  $conn= mysqli_connect($server,$username,$password,$dbname);
 
	  
  
  if(!$conn){
	  die("connect failed"-mysqli_connect_errno());}
  if(isset($_POST['submit'])){
  $fullname=$_POST['fullname'];
  $testscore=$_POST['testscore'];
  $examscore=$_POST['examscore'];
  $total=$testscore + $examscore;
  $grade=$_POST['grade'];
  $query1="INSERT INTO store7( fullname, testscore, examscore, total)
  VALUE
  ('$fullname','$testscore','$examscore','$total')";
   
 if(mysqli_query($conn,$query1)){
   
    
    header("location:gradingsys.php");
}else{
   echo"error"."".mysqli_errno($conn);
}
mysqli_close($conn);


}

?>



