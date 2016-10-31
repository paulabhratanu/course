<html>
<head>
<title> Registration Form </title>
</head>
<body>
<form method='post' action='registration.php'>
<table width='400' border='5' align='center'>
<tr>
<td align='center' colspan='5'> <h1>Registration Form</h1></td>
</tr>

<tr>
<td align='center'>User Name:</td>
<td><input type='text' name='name' /></td>
</tr>

<tr>
<td align='center' >User Password:</td>
<td><input type='password' name='pass'/></td>
</tr>

<tr>
<td align='center'>Email:</td>
<td><input type='text' name='email'/></td>
</tr>

<tr>
<td colspan='5' align='center'><input type='submit' name='submit' value='Sign Up'</td>
</tr>
</form>
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("ecommerce");
if(isset($_POST['submit'])){
	$user_name=$_POST['name'];
	$user_pass=$_POST['pass'];
	$user_email=$_POST['email'];
	if($user_name==''){
		echo "<script>alert ('Please enter your name!')</script>";
		exit();
		}
	
	if($user_pass==''){
		echo "<script>alert ('Please enter your password!')</script>";
		exit();
		}
		
		if($user_email==''){
		echo "<script>alert ('Please enter your email!')</script>";
		exit();
		}
		$check_email="select * from users where user_email='$user_email'";
		$run =mysql_query($check_email);
		if(mysql_num_rows($run)>0){
			echo"<script>alert('Email $user_email is already exist,please try another one!')</script>";
			exit();
		}
		$query = "insert into users (user_name,user_pass,user_email) values ('$user_name','$user_pass','$user_email')";
		if (mysql_query($query)){
		echo"<script>alert('Registration Successful!')</script>";	
		}
		
		
}


?>