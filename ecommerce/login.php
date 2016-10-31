

<html>
<head>
<title> Login page </title>
</head>
<style type='text/css'>
body {
background :skyblue;	
}
</style>
<body>
<form method='post' action='login.php'>
<table width='400' border='5' align='center'>
<tr>
<td align='center' colspan='5'> <h1>Login Form</h1></td>
</tr>


<tr>
<td align='center' > Password:</td> 
<td><input type='password' name='pass'/></td>
</tr>

<tr>
<td align='center'>Email:</td>
<td><input type='text' name='email'/></td>
</tr>

<tr>
<td colspan='5' align='center'><input type='submit' name='login' value='Login'</td>
</tr>
</table>
</form>
<center>
<font color='red' size='6' >Not registered yet?</font> <a href='registration.php'>Sign Up Here</a>
</center>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("ecommerce");
if(isset($_POST['login'])){
	$password=$_POST['pass'];
	$email=$_POST['email'];
	$check_user="select * from users where user_pass='$password' AND user_email='$email'";
	$run=mysql_query($check_user);
	if(mysql_num_rows($run)>0){
		$_SESSION['email']=$email;
		echo "<script>window.open('payment.php','_self')</script>";
	}
	else{
		echo"<script>alert('Email or password is incorrect!')</script>";
	}
}

?>
