<?php include('db_connect.php');?>
<html> 
<head> 
<style> 
 
.outer{  
margin:auto; 
height:400px; 
width:400px; 
border:2px solid black; 
position:relative 
} 
p{ 
margin-left:80px; 
} 
.in{ 
margin-left:80px; 
padding:10px 
} 
#bt{ 
margin-top:20px; 
position:absolute; 
left:150px; 
} 
#bt:hover{ 
background:green; 
font-size:13px; 
cursor:pointer; 
color:white; 
} 
</style> 
<script> 
function fa(){ 
if(a.value=="" || b.value==""|| c.value==""){ 
f() 
document.getElementById("a").style.border="3px solid red" 
document.getElementById("b").style.border="3px solid red"
document.getElementById("c").style.border="3px solid red"
bt.value="Pahila data tak" 
} 
else{ 
document.getElementById("a").style.border="3px solid green" 
document.getElementById("b").style.border="3px solid green" 
document.getElementById("c").style.border="3px solid green" 
bt.value="Ha thik ahe ata" 
bt.style.left="120px"; 
} 
} 
flag=1 
function f(){ 
if(flag==1){ 
bt.style.left="210px" 
flag=2 
} 
else if(flag==2){ 
bt.style.left="80px" 
flag=1 
} 
} 
</script> 
</head> 
<body> 
<div class="outer"> 
<h1 style="text-align:center">Feedback Form</h1> 
<p>Name:</p>
<input class="in" type="text" placeholder="Enter your name" id="a"/><br> 
<p>Email:</p>
<input class="in" type="text" placeholder="Enter your email" id="b"/> 

<p>Any Suggestions:</p>
<p><textarea placeholder="enter your suggestions here" id="c"></textarea></p><br>
<input type="submit" onmouseenter="fa()" onclick="alert('Waaaa Bhai')" id="bt" /> 
 
</div> 
 
</body> 
 
 
</html>