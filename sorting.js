

//  var myName= prompt("enter your name");

//document.write("you are :" + " "+"<button>"+ myName+"</button");  v

var number =[1,2,3,4,5]

 var sum = number.reduce(function(n1,n2){
 	var ans=n1+n2*2;

 	return ans;
 });
 console.log(sum);