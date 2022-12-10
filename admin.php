<?php
$server_Name="localhost";
$password="Jamocity2003$";
$username="jamiu";
$database_Name="november2022";
$conn=new mysqli($server_Name,$username,$password,$database_Name);
if(mysqli_connect_errno()){
echo 'connection failed' . mysqli_connect_error();}
else{

echo "<strong style='margin-left:300px;font-size:25px;'>"."complaint management"."</strong>";
echo "<br>";}

?>

<?php 
    if(isset($_GET['username'])){
    $name=$_GET["username"];
    $contact=$_GET["contact"];
    $gender=$_GET["gender"];
    $email=$_GET["email"];
     
    }
    else{
      echo"ohh i am not working try something different";
    }
?>

<?php
include'connect.php';
$sql = "SELECT  * FROM store6";
$result = $conn->query($sql);


$conn->close();

?>

<?php
include'connect.php';
$sql2 = "SELECT  * FROM store2";
$result2 = $conn->query($sql2);


$conn->close();

?>
<?php
include'connect.php';
$sql3 = "SELECT  * FROM store4";
$result3 = $conn->query($sql3);


$conn->close();

?>


<html>
  <head>
<link rel="stylesheet"
          href=
"bootstrap-5.0.0-dist/css/bootstrap.css">
        <script src="bootstrap-5.0.0-dist/js/bootstrap.bundle.js"></script>
   <style>
   body{
  background-image:url(c10.jpg);
    background-repeat: no-repeat;
     background-position: absolute;
    background-size: cover;
    background-size: 100% 100%;
    background-attachment: fixed; 
    opacity:1;
   }
   div{border-radius: 0%;}
   table{
  width: 400px;
  border-collapse: collapse;
  border: 1px solid #fff; /*for older IE*/
  border-style: hidden;
}

   }
   
    td{
       font-weight: bold;
       font-style: verdena;
       color:ghostwhite;
       width: 50px;
    }
    a{text-decoration:none;
      margin-left:left;}
      #div2{
        margin-left:30px;
        margin-top:10px;
         display:none;
      }
      .inp1{
  background:aliceblue;
  
  width:100px;
  height:30px;
  border-radius:10px;
  outline:none;
  font-size:15px;
  text-align:center;
  margin:30px;
  
  }
  
  
  
  header{
   background:linear-gradient(to left,cyan,teal,blue);
   text-align:center;
   width:500px;
   top:0px;
   height:120px;
   position:fixed;

  }
  
  
  
  #sect1{font-size:20px;
  
    font-size:30px;
       top:0;
  
  font-weight:bold;
  color:white;
  width:auto;
  }
  
  
  
  
  .personal{
  margin:30px;
  background-color:aliceblue;
  outline:none;}
  
  
  
  #div2{
  display :none;}
  
  
  
  #div1{
  display :block;
  margin-top:60px;}
  
  
  
  #div3{
  display :none;}
  
  
  b:hover{
  color:white;
  font-style:underline;
  }
  
  
  
  
  
  #bigshow{
  width:250px;
  height:150px;}
  
  
  #submit{
  border-radius:0%;
  width:120px;
  height:50px;
  color:white;
  background-color:green;
  border:none;
  }
  
  
  #main{
  color:white;
  background-color:darkslateblue;
  margin-left:300px;
  margin-top:100px;
  width:500px;
  }
  #user{
    display:none;
  }
  
  label{
  
  font-size:20px;
  font-weight:bold;
  }
  input{
    width:300px;
    height:40px;
  }
  #box2,#div2{display:none;}
   </style>     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    

  </head>
  <body>

      <header class="container-fluid fixed-top  text-light" style="position:fixed;left:0px;top:0px;"><h2 class="float-end"><i style="font-style:wingding;">Admin Backend Page</i></h2><br/>
       
     
          <nav class="navbar navbar-expand-sm ">
             <ul class="nav nav-tabs" style="font-size:15px;   font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab1" >
               <li class="nav-item">
                 <a class="nav-link text-dark" href="#" style="text-decoration:none" class="text-light">my profile</a>
               </li>
             </ul>
              <ul class="nav nav-tabs dropdown" style="font-size:15px;  font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab2" >
               <li class="nav-item">
                 <a class="nav-link text-dark" href="#" class="text-light">add admin</a>
               </li>
             </ul>
              <ul class="nav nav-tabs" style="font-size:15px;  font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab3" >
               <li class="nav-item">
                 <a class="nav-link text-dark" href="#" class="text-light">delete admin</a>
               </li>
             </ul> 
       

             <ul class="nav nav-tabs" style="font-size:15px;  font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab4" >
               <li class="nav-item">
                 <a class="nav-link text-dark" href="#" style="text-decoration:none" class="text-light">users</a>
               </li>
             </ul>
              <ul class="nav nav-tabs dropdown" style="font-size:15px;  font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab5" >
               <li class="nav-item">
                 <a class="nav-link text-dark" href="#" class="text-light">complaint</a>
               </li>
             </ul>
              <ul class="nav nav-tabs" style="font-size:15px;  font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab6" >
               <li class="nav-item">
                 <a class="nav-link text-dark" href="#" class="text-light">history</a>
               </li>
             </ul> 
          
           <ul class="nav nav-tabs" style="font-size:15px;  font-weight:bold; color:ghostwhite; border-radius:0%;"  id="lab7" >
               <li class="nav-item">
                 <a class="nav-link text-dark" href="#" class="text-light">logout</a>
               </li>
             </ul>
          </nav>


     



           
    </header>

      


    <div class="container  text-dark" style="">
      <div class="container" id="div2"> 
        <div class="container">
      <h2 class="field text-dark">users and profiles</h2></div>

    <div>
    <table class="container" border='1' cellpadding='1' cellspacing='1'>
      <tr bgcolor="blue" class="container text-dark">
      <th>Name</th>
       <th>email</th>
        <th>contact</th>
         <th>gender</th>
          <th>operation1</th>
          <th>operation2</th>
       </tr>
       <?php

       if ($result->num_rows > 0) {
        
  while($row = $result->fetch_assoc()) {
    $id=$row['id'];
     $username=$row['username'];
     $email=$row['email'];
    $contact=$row['contact'];
    $gender=$row['gender'];
    echo "<tr class='container text-dark' style='color:ghostwhite' border='1'>
    <td>$username</td>
    <td>$email</td>
    <td>$contact</td>
    <td>$gender</td>
    <td class='text-dark'><button class='btn btn-danger'><a href='delete2.php?deleteid2=$id' class='text-light'style='text-decoration:none;'>delete</a></button>"."</td>
    <td class='text-dark'><button class='btn btn-primary'><a href='update2.php?updateid=$id' class='text-light' style='text-decoration:none;'>update</a></button></td>
    </tr>";
  }
       }
    ?>
</table>
  <div class="container text-dark">
    <ul  class="btn btn-danger float-end">
     
    </ul></div></div></div><br/>   
<div class="container" id="suggest" style="display:none;">




    
           <?php

           include'connect.php';
$sql2 = "SELECT  * FROM store3";
$result2 = $conn->query($sql2);

       if ($result2->num_rows > 0) {
  while($row = $result2->fetch_assoc()) {
    echo "<div class='row container text-dark'  style='font-weight:bold'>".$row["complaint"]."<br><div class='container'><ul class='col-sm-3   btn btn-primary float-end'>"."by"." ".$row["name"]."</ul></div></div><hr/>";
  }
       }
    ?>


       </div>

       <div class="row container" style="display:none;" id="box1">
              <section class="container float-center panel-body" id="sect2">
           <h4><i  class="text-dark">my profile</i></h4><br>
             <div class="row">
              <label   class="col-sm-4 text-dark">NAME</label> <strong  class="col-sm-4 class="text-dark"    name='name'><?php echo ':'.' '.$name; ?></strong><br>
        </div><br><hr>
             <div class="row">
        <label   class="col-sm-4 text-dark">EMAIL</label> <strong  class="col-sm-4" name='email'><?php echo ':'.' '. $email; ?></strong><br>
                </div> <br><hr>
            <div class="row">
              <label   class="col-sm-4 text-dark">GENDER</label> <strong  class="col-sm-4"    name='gender'><?php echo ':'.' '. $gender; ?></strong><br>
           </div><br><hr>
           <div class="row">
         
          <label   class="col-sm-4 text-dark">CONTACT</label> <strong  class="col-sm-4"  name='contact'><?php echo ':'.' '. $contact; ?></strong><br>
      </div><br><hr>
        <div class="row"> 
       <input type="button"  class="col-sm-4 text-dark" class="control"  value="Edit"/>
       
          </div>
     
    </div>
    
      <div id="box2" class="row container">
             <h3>Add new user</h3> 
                <form class="col-sm-6" method="POST" action="signup2.php">
       <pre>     
      
                <label>sign up</label><br>
  
     <label>username</label>
               <input name="username" id="dox2" type="input" required/><br>
     <label>E-mail  </label>
               <input type="email" id="dox4" name="email" required/><br>
     <label>password</label>
               <input type="password" id="dox3" name="password" required/><br>
     <label>gender </label>
               <input type="input" id="dox4" name="gender" required/><br>
     <label>contact </label>
               <input type="number" id="dox4" name="contact" required/><br>
                                           <input type="submit" id="submit"class="btn btn-primary col-sm-4 float-start text-light"  name="submit" value="SUBMIT"/>
     </pre>
     </form>
      </div>
      <div class="row container" id="user">
     <table class="container" border='1' cellpadding='5' cellspacing='5'>
      <tr bgcolor="coral" class="fluid">
      <th>Name</th>
       <th>email</th>
        <th>contact</th>
         <th>gender</th>
          <th>operation1</th>
          <th>operation2</th>
       </tr>
       <?php

       if ($result3->num_rows > 0) {
        
  while($row3 = $result3->fetch_assoc()) {
    $id=$row3['id'];
     $username=$row3['username'];
     $email=$row3['email'];
    $contact=$row3['contact'];
    $gender=$row['gender'];
    echo "<tr class='fluid' bgcolor='aliceblue' border='1'>
    <td>$username</td>
    <td>$email</td>
    <td>$contact</td>
    <td>$gender</td>
    <td><button class='btn btn-danger'><a href='delete.php?deleteid=$id' class='text-light'style='text-decoration:none;'>delete</a></button>"."</td>
    <td><button class='btn btn-primary'><a href='update.php?updateid=$id' class='text-light' style='text-decoration:none;'>update</a></button></td>
    </tr>";
  }
       }
    ?>
</table>
    </div>
    </div><br>
  </body>







    </div><br>



       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script type="text/javaScript">
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
  <script>
        $('#lab3').click(function(){
      $('#div2').css('display','block');
      $('#suggest').css('display','none');
       $('#box1').css('display','none');
       $('#box2').css('display','none');
    });
    $('#lab5').click(function(){
       $('#div2').css('display','none');
      $('#suggest').css('display','block');
       $('#box1').css('display','none');
       $('#box2').css('display','none');
    });
    $('#lab1').click(function(){
        $('#div2').css('display','none');
      $('#box1').css('display','block');
       $('#suggest').css('display','none');
      $('#box2').css('display','none');


       
    });
     $('#lab2').click(function(){
      $('#div2').css('display','none');
      $('#suggest').css('display','none');
       $('#box1').css('display','none');
       $('#box2').css('display','block');
    });
       $('#lab4').click(function(){
      $('#suggest').css('display','none');
      $('#div2').css('display','none');
       $('#box1').css('display','none');
       $('#box2').css('display','none');
       $('#user').css('display','block');
    });
  </script>
  </body>



</html>