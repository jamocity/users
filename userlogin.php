<?php 
$name=$_REQUEST["username2"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    <script>
	
	  function load(){
	    box1.value="";
		box2.value="";
	  }
	</script>
	<style>
	body{text-align:center;
	justify-content:center;
	background-color:deepblue;
	}
	
	
	.inp1{
	background:aliceblue;
	color:black;
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
	 height:110px;
	 position:fixed;

	}
	#box3{
	color:ghostwhite;
	background-color:green;
	width:120px;
	height:50px;
	border:none;
	}
	#sect1{font-size:20px;
	  color:ghostwhite;
	  font-size:30px;
	  	 top:0;
	
	font-weight:bold;
	color:ghostwhite;
	width:auto;
	}
	input{
	margin:25px;}
	
	#main{
	color:ghostwhite;
	background-color:midnightblue;
	margin-left:300px;
	margin-top:100px;
	width:500px;
	}
	
	
	input{
	margin:25px;
	width:250px;
	height:40px;
	border-radius:0px 20px 20px 0px;}
	
	.personal{
	margin:30px;
	background-color:aliceblue;
	outline:none;}
	
	
	
	#div1{
	display :none;}
	
	
	
	#div2{
	display :block;
	margin-top:60px;}
	
	
	#div3{
	display :none;}
	a{
	color:red;}
	
	
	
	
	
	
	
	</style>
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  
   
	</head>
	<body onload="load()">
	     <section id="main">
	       <header>
	         <h3 id="sect1"> customer complain service/login</h3>
	
	       </header><br>
	<main>
	    
	
	    <div id="div2">
		 <form method="POST" action="userloginscript.php">
	       <h3>login</h3>
	       <label>username</label>
	       <input  class=""  id="box1" name="username2" type="input" required/><br>
	       <label>password</label>
	       <input class="" id="box2" name="password2" type ="password" required/><br>

	
	
	       <input  class="btn btn-primary text-light" style="border-radius:0px;" type="submit" name="login" id="box3" value="login"/><br>
	    </div><br>
	    </form>
	
	   <section>
	    <div id="div4">
		<label><a href="changepassword.php">forget password?</a></label>
		<label>don't have an account yet </label>
		<h3><a href="customersignup.html">sign up</a></h3>
		<h3>help?</h3>
		<h3><marque></marquee></h3>
		  
		</div>
      
     </section>
     
	
	</main>
	
	
	</body>
	</html>