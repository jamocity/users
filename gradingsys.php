<?php
$server_Name="localhost";
$password="Jamocity2003$";
$username="jamiu";
$database_Name="november2022";
$conn=new mysqli($server_Name,$username,$password,$database_Name);
if(mysqli_connect_errno()){
echo 'connection failed' . mysqli_connect_error();}
else{
  echo "";
}
?>


<?php
include'connect.php';
$sql = "SELECT  * FROM store7";
$result = $conn->query($sql);


$conn->close();
?>

<html>
<head> 
   <title>
   A grading system
   </title>
   <link rel="stylesheet"
          href=
"bootstrap-5.0.0-dist/css/bootstrap.css">
        <script src="bootstrap-5.0.0-dist/js/bootstrap.bundle.js"></script>
      <style> td{
         font-family: new roman;
      	}
        label{
          font-family: verdena;
        }
  
        #n1{
          width: 50px;
        }
      	</style>
</head>
<body>
  <header  style="background:teal; font-family:fantasy;"  class="container-fluid fixed-top  text-light"><strong>A Grading System</strong>
     <div class="container">
    <nav class="navbar navbar-expand-sm float-end" >
     
      <ul class="nav nav-tabs"><li class="nav-item"><a href="#" class="nav-link text-light">faculty</a></li></ul>
    <ul class="nav nav-tabs"><li class="nav-item"><a href="#" class="nav-link text-light">level</a></li></ul>
          <ul class="nav nav-tabs"><li class="nav-item"><a href="#" class="nav-link text-light">course</a></li></ul>    </nav>
     </container>
    <hr></header>  <br/><br/>
   <div class="container">
   	<form method="POST" style="margin-top:40px;" action="update.php">

   		<fieldset class="form-group row">
     <label class="col-sm-2" for="inp1">Enter FullName :</label> <input  id="inp1" class="col-sm-10" name="fullname"/></fieldset><br/>
     <fieldset class="form-group row">
    <label  class="col-sm-2" for="inp2">Enter Test Score :</label><input class="col-sm-10" id="inp2" name="testscore"/></fieldset><br/>
     <fieldset class="form-group row">
     <label for="inp3" class="col-sm-2">Enter Exam Score :</label><input class="col-sm-10" id="inp3" name="examscore"/></fieldset><br/>
     <fieldset>
     <input class="btn btn-primary float-end"value="submit" name="submit" type="submit"/>
   	   </fieldset>
   	</form>

     <table  class="table table-striped">
      <tr>
        <th>s/n</th>
      	<td>full name</td>
        <td>text score</td>
        <td>exam score</td>
        <td>total score</td>
        <td>Grade</td>
        
      </tr>
        <?php

       if ($result->num_rows > 0) {
        
  while($row = $result->fetch_assoc()) {
    $id=$row['id'];
     $fullname=$row['fullname'];
     $testscore=$row['testscore'];
    $examscore=$row['examscore'];
    $total=$row['total'];
    if($total >=70){
    $grade='A';}
    else if($total >59){$grade='B';}
    else if($total >49){$grade='C';}
    else if($total >39){$grade='D';}
    else if($total <40){$grade='F';}
      
    echo "<tr>
    <td id='n1'>$id</td>
    <td>$fullname</td>
    <td>$testscore</td>
    <td>$examscore</td>
    <td>$total</td>
    <td bgcolor='cyan' id='n1'>$grade</td>
   
    </tr>";
  }
       }
    ?>

     </table>
   </div>

</body>




</html>