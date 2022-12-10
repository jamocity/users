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