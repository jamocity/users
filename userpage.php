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
   <html>
     <head>
	 <script></script>
	  <link rel="stylesheet"
          href=
"bootstrap-5.0.0-dist/css/bootstrap.css">
  <link rel="stylesheet"
          href=
"bootstrap-5.0.0-dist/js/bootstrap.css">
 <link rel="stylesheet"
          href=
"userpage.css">
      
	 </head>
       <body>
	    <header class="row container-fluid fixed-top "><h2 class="text-justify">CUSTOMER'S COMPLAINT SERVICE</h2>
		
		  
		   	<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
		   <ul class="nav nav-tabs" style="border:none;">
                 <li class="nav-item"  id="lab1" ><a class="nav-link text-light" href="#"> my profile</a></li>
		   </ul>
		    <ul class="nav nav-tabs" style="border:none;">
                 <li class="nav-item"  id="lab2"><a class="nav-link text-light" href="#">update</a></li>
		   </ul>
		     <ul class="nav nav-tabs" style="border:none;">
                 <li class="nav-item"  id="lab3"><a class="nav-link text-light" href="#">complaint</a></li>
		   </ul>
		     <ul class="nav nav-tabs" style="border:none;">
                 <li class="nav-item"  id="lab4"><a class="nav-link text-light" href="#">reply</a></li>
		   </ul>
               <ul class="nav nav-tabs" style="border:none;">
                 <li class="nav-item"  id="lab5"><a class="nav-link text-light" href="#">logout</a></li>
		   </ul>
		  
		   </nav>
		  
		   </header><br>
		  <main class="row container-fluid fixed-center">
		<form method="post" action="backend.php">
		    <section class="container float-center panel-body" id="sect2">
           <h4><i style="color:black">my profile</i></h4><br>
             <div class="row">
              <label  style="color:black;" class="col-sm-4">NAME</label> <strong  class="col-sm-4"   style="color:black;" name='name'><?php echo ' '.$name; ?></strong><br>
        </div><br><hr>
             <div class="row">
        <label  style="color:black;" class="col-sm-4">EMAIL</label> <strong  class="col-sm-4" style="color:black;" name='email'><?php echo ' '. $email; ?></strong><br>
                </div> <br><hr>
            <div class="row">
              <label  style="color:black;" class="col-sm-4">GENDER</label> <strong  class="col-sm-4"   style="color:black;" name='gender'><?php echo ' '. $gender; ?></strong><br>
           </div><br><hr>
           <div class="row">
         
          <label  style="color:black;" class="col-sm-4">CONTACT</label> <strong  class="col-sm-4" style="color:black;" name='contact'><?php echo ' '. $contact; ?></strong><br>
      </div><br><hr>
        <div class="row"> 
       <input type="button"  class="col-sm-4" class="control" id="cancel" value="cancel"/>
       <input type="button"  class="col-sm-4" class="control" id="save" value="save"/>
          </div>
                 
                
      
    
    
    
    </section>
		<!-- <section id="sect3">
		   <div>
		     <label>Name</label><input type="input" /><br><br>
		     <label>Email</label><input type="input" /><br><br>
			 <label>Password</label><input type="input" /><br><br>
			 <input type="button" class="control" id="cancel" value="cancel"/>
			 <input type="button" class="control" id="save" value="save"/>
		   
		   </div>
		
		</section>  !-->
		<!-- <section>
		   <label>update wil show here ....</label>
		!-->
		<!--<div class="row"><img class="col-sm-4" src="img/c10.jpg"/><img/></div>-->
		<div id="box" class="row container md-5">
		   <label>DROP YOUR COMPLAIN</label><BR>
		   <textarea name="complain"></textarea>
		   <input type="submit" id="clean" class="btn btn-primary  float-end" name="send" value="send"/>
		   </div>
		   </form>
		  
		 
		<section>
		   <div class="message" class="row container">
		   <button id="close">&times</button>
		     <strong>new snacks available</strong>
		     <div id="slideshow">
   <div>
     <img src="img1.jpg" width="500px">
   </div>
   <div>
     <img src="img2.jpg"  width="500px">
   </div>
   <div>
     <img src="img3..jpg"  width="500px">
   </div>
</div>
		   
		   </div>
		
		</section>
		</main>
		
		
		<foooter></footer>
	 
     <script src="CMS/bootstrap-5.0.0-dist/js/bootstrap.bundle.js"></script>
	 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script type="text/javaScript">
   
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	 <script>
 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(800)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	$('#close').click(function(){
	    $('.message').css('display','none');
	  
	  });
	  $('#lab2').click(function(){
	    $('.box').css('display','block');
	  
	  });
	  $('#save').click(function(){
	    swal.fire({'tittle':"hello world",
               'text':"you have successfully saved changes",
			    'type':"success"});
	  
	  });
	$('#lab1').click(function(){
	    $('#sect2').css('display','block');
	    $('.message').css('display','none');
		$('#box').css('display','none');
		$('#box2').css('display','none');
	  });
	  $('#lab3').click(function(){
	    $('#sect2').css('display','none');
	    $('.message').css('display','none');
		$('#box').css('display','block');
		$('#box2').css('display','none');
	  });
	  $('#lab2').click(function(){
	    $('.message').css('display','block');
		$('#sect2').css('display','none');
	    $('#box').css('display','none');
		$('#box2').css('display','none');
	  });
	  $('#lab4').click(function(){
	    $('.message').css('display','none');
		$('#sect2').css('display','none');
	    $('#box').css('display','none');
		$('#box2').css('display','block');
	  });
	  
	  $('#edit').click(function(){
	    $('#sect3').css('display','block');
	  
	  });
	  $('#cancel').click(function(){
	    $('#sect2').css('display','none');
		
	  
	  });
	   $("#slideshow > div:gt(0)").hide();

var index = 1;
var maxindex = $('#slideshow > div').length;

setInterval(function () {
    $('#slideshow > div:first')
        .fadeOut(2000)
        .next()
        .fadeIn(2000)
        .end()
        .appendTo('#slideshow');
    $('ul li').removeClass('active');
    $('ul li:eq(' + index + ')').addClass('active');
    index = index < maxindex - 1 ? index + 1 : 0;
}, 3000);

for (var i = 0; i < maxindex; i++) {
    $('ul').append('<li class="' + (i == 0 ? 'active' : '') + '"></li>');}



	 </script>
   
   
   
   </body>

   </html>