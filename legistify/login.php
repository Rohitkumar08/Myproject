
<style>
body{
	background-image:url("back.jpg");
	
	background-repeat: no-repeat;
	background-size:1370px 800px;
}

#img{
	font-size:45px;
	display:inline block;
	color:blue;
	text-align:center;

	
}
#logout{
	display:inline block;
	margin-right:px;
	position:absolute;
	top:20px;
	right:33px;
	border-left: solid 1px lightgray;
    border-left-width: 1px;
    border-left-style: solid;
    border-left-color: lightgray;
    padding-left: 10px;
	margin-right: 25px;
	
	}
#email{
	color:magenta;
	font-size:25px;
	display:inline block;
	margin-right:50px;
	position:absolute;
	top:20px;
	right:100px;
	
}	
#tol{
	display:inline block;
	text-align:right;
	top:30px;
	
	
}



</style>
<body>
<div id="img">
Welcome to our site
<hr>
</div>

<div id="tol">

<span id="email">
<b>
 <?php
ob_start();

if(isset($_POST['submit']))
{
	echo $_REQUEST['eMail'],'<br>';

}
else{
	header('location:legistify.php');
	exit;
}

?>
</span>

</b>
<span id="logout">
<form type="Logout" action="legistify.php"/>
<input type="submit"  name="log" value="sign out">
</form>
</span>
</div>


</body>