<html>
<head>
<title>Registration Form in HTML</title>
<link href='css/style.css' type='text/css' rel='stylesheet'/>
</head>
<style>
#base{
	
}
body{
	background-image:url("back.jpg");
	background-repeat:no-repeat;
	background-size:1370px 800px;
	width:100%;
}

</style>



<style type='text/css'>
 .error{
		color: #f00;
		background-color: #ff0;
		border: 1px solid #f00;
		background-image: url(images/cross.png);
		background-repeat: no-repeat;
		background-position: center right;
		padding-right: 16px;
 }
 .ok{
		color: #0a0;
		background-color: #fff;
		border: 1px solid #0a0;
		background-image: url(images/tick.png);
		background-repeat: no-repeat;
		background-position: center right;
		padding-right: 16px;
 }

</style>


<body>
<div id="base">

<div id="tab">
<h3 align='center'>-:REGISTRATION FORM:-</h3>
<hr>
<form name='regForm'>
<table align='center'  background-repeat="no-repeat"  width='400px' height='105px' border='2'  cellpadding='1' cellspacing='0'>
<tr><th  colspan='2'>New User Please Register</th></tr>
<tr><td >FirsName</td><td>
<input type='text' placeholder='Min 2 Char' name='Name' id='regFname' value='' onkeyup='javascript: validate(this.value)'/>
</td></tr>
<tr><td>User Name</td><td>
<input type='text' placeholder='Min 2 Char' name='UserName' id='uname' value=''  onkeyup='javascript: validateU(this.value)'/>
</td></tr>
<tr><td>Enter Email</td><td><input type="email" name="Email" id="regEmail" required/>
</td></tr>
<tr><td>Enter DOB</td><td>
<input type='date' name='dob'  id='regDob' />
</td></tr>
<tr><td>Enter Password</td><td>
<input type='password'  name='Password' id='regPwd' onkeyup='javascript: validateP(this.value)'/>
</td></tr>
<tr><td>Confirm Password</td><td>
<input type='password' name='rPassword' id='regCpwd' onkeyup='javascript: validateC(this.value)'/>
</td></tr>
<tr><td>Enter Mobile</td><td>
<input type='text' name='Mobile' id='regMob' onkeyup='javascript: validateM(this.value)'/>
</td></tr>

<tr><td colspan='2' align='right'><input type='button' value='Register !'onclick='myfunction()' name='submit'/> 
<input type='submit'  onsubmit='return validateForm()' value='check availability!' name='check'/> </td></tr>
<!----------------------------------------validation for alert box------------------------------>
<script>
function myfunction()
{
var f=document.getElementById("regFname");
var l=document.getElementById("uname");
var e=document.getElementById("regEmail");
var d=document.getElementById("regDob").value;
var p=document.getElementById("regPwd").value; 	
var c=document.getElementById("regCpwd").value;
var m=document.getElementById("regMob").value;


alert("First name: " +f.value+ "\n\nUser name: "+l.value+ "\n\nEmail: "+e.value+ "\n\nD.O.B: "+d+ "\n\npassword: " +p+ "\n\nMobile no: " +m+  "\n");

 
}
</script>

<!-------------------validation for  frist name------------------>
<script type='text/javascript'>
function validate(v){
	npat = /^[a-z]{3,}$/i;
	if(!npat.test(v)){
		document.getElementById('regFname').className='error';
	}else{
		document.getElementById('regFname').className='ok';
	}
}
</script>

<!-----------validation for username----->
<script type='text/javascript'>
function validateU(un){
	un_pat = /^[a-z0-9]{3,}$/i;
	if(!un_pat.test(un)){
		document.getElementById("uname").className="error"; 
	}
		else{
			document.getElementById("uname").className="ok"; 
  
	}
}
</script>

<!------------validation for   email---------------->

<script type='text/javascript'>
function validateE(e){
	e_pat = /^[a-z0-9]{3,}{@}$/i;
	if(!e_pat.test(e)){
		document.getElementById("regEmail").className="error"; 
	}
		else{
			document.getElementById("regEmail").className="ok"; 
  
	}
}
</script>

<!----------------validation for password--------->

<script type='text/javascript'>
function validateP(p){
	p = document.regForm.Password.value;
	if(p.length < 6){
		document.getElementById("regPwd").className="error";  
	}
	else{	
	document.getElementById("regPwd").className="ok";
	
	}
}

</script>
<!----------validation for confirm password---------------->

<script type='text/javascript'>
function validateC(rp){
	p=document.getElementById("regPwd").value;
	rp=document.getElementById("regCpwd").value;
	if( rp !=p ){
		document.getElementById("regCpwd").className="error";  
	}	
	else{
		document.getElementById("regCpwd").className="ok";  
	}

}
</script>
<!-------------validation for Mobile no---------->
<script type='text/javascript'>
function validateM(m){
	m_pat = /^[6-9][0-9]{9}$/;
	if(!m_pat.test(m)){
		document.getElementById("regMob").className="error";		
	}
	else{
		document.getElementById("regMob").className="ok";
	}
}
</script>

</div>

</table>
</form>
<pre>















</pre>
</div>
</body>
</html>
<pre>





</pre>