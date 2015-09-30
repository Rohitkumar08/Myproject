<?php
ob_start();
session_start();
?>


<html>
<title>
legistify
</title>
<style>
#clr{
	background-color:;
	
	
}

.thrd {display: inline-block;
    width: 200px;
	padding: 40px 50px 50px 0px;
  }
  
  
#fst{
	border:dashed 5px #000000;
	border-radius:15px;
	
	margin-top:30px;
	margin-left:300px;
box-shadow: 10px 8px 8px rgba(0, 0, 0, 0.2);
    height: 400px;
	padding:15px;
	width:700px;
	background-color:sky blue;

}
#sec{
	display: inline-block;
    width: 280px;
	color:grey;
	
   
    
    padding: 43px 50px 50px 50px;
    min-height: 330px;
	
}
#fr{
	
	display:inline block;
	position:absolute;
	top:200px;
	right:330px;
	border-left: solid 1px lightgray;
    border-left-width: 1px;
    border-left-style: solid;
    border-left-color: lightgray;
    padding-left: 10px;
	margin-right: 25px;
	line-height:2.5;
	
}
body{
	background-image:url("back.jpg");
	
	background-repeat: no-repeat;
	background-size:1370px 800px;
}
#blink{
	text-decoration: blink;
	color:red;
}
</style>
<body>

<div id="header">

<div id="fst">
<h1>Log in Details:</h1>
<div id="clr">


<div id="sec">


<form name="myform" method="post" action="login.php">
<b>Email:<br>
<input type='email' name="eMail" placeholder="Email"  maxlength="225" width="60px" required/><br><br><br>
Password:<br>
<input type='password' name="pwd" placeholder="password" /><br>
</b>
<input type="checkbox" name="rememberMe" id="form-login-remember" tabindex="3">
Remember my email on this computer.<br><br>
<input type='submit'  name='submit' value="Sign in" ><br>
<hr>


</form>

<div class="thrd">
<form class="new" action="register.php"/>
<div id="blink">
	 Don't have an account....yet!!!<br>
	 register here
	 </div>
        <button title="register here" color="blue" width="30px" height="20px" >sign up</button> 
		</form>
</div>
</div>
		<div id="fr">
		<h2>Sign up with existing accounts..</h2>
		<a href="http://www.facebook.com">
         <img src="fb.jpg" title="register through facebook" width="42" height="42" border="0" ><br><br>
		<a href="http://www.in.linkedin.com">
           <img src="ln.png" title="register through Linkedln"  width="42" height="42" border="0">
	
		</div>
	
	
</div>
</div>
</div>
</body>
</html>
