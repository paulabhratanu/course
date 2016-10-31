<html>
<head>
<link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/uikit.gradient.min.css" />
        <link rel="stylesheet" href="register.css" />
        <script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>

</head>
<body background="image_3.jpg">
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("minor", $con);
$nameErr = $emailErr = $loginerror = $passErr = "";
$name = $email = $gender = $pass = "";
$count=0;
$count_1=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])||empty($_POST["pass"])||empty($_POST["email"]))
   {

	if(empty($_POST["name"]))
	{
     $nameErr = "username is required";
	}

	if(empty($_POST["pass"]))
	{
     $passErr = "password is required";
	}

	if(empty($_POST["email"]))
	{
     $emailErr = "email is required";
	}

 }
 else
 {
     $name = test_input($_POST["name"]);
	 $pass = test_input($_POST["pass"]);
	 $email = test_input($_POST["email"]);
	 $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

	       $temp = mysql_query("SELECT email from register");
		   $temp_1=mysql_query("SELECT username from register");
		   while($col_1 = mysql_fetch_array($temp_1))
           {
             if ($name==$col_1['username']){
             $loginerror= "username already taken";
              $count_1++;
             }

          }
	       while($col = mysql_fetch_array($temp))
           {
             if ($email==$col['email']){
             $loginerror= "email already taken";
              $count++;
             }

          }
		 if($count==0&&$count_1==0)
		 {
		    if(preg_match($regex, $email))
          {
	         $i=md5($pass);
			 $sql = mysql_query("INSERT INTO register (username,password,email)
             VALUES ('$name','$i','$email')");

			 echo "<script>alert('CONGRATS!!sucessfully registered')</script>";

          }
         else
        {
   		 $loginerror= "not valid email";
         }

      }
  }
 }
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<br>
<br>
<br>
<TABLE BORDER="0" cellpadding="0" CELLSPACING="0" align="center">
<TR>

<TD WIDTH="543" HEIGHT="389" BACKGROUND="sign_up.png" align="center">
<br><br>
<p><span class="error">* required field.</span></p>
<form  class="uk-form" method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset data-uk-margin>
   <h4 class="detail">Username:<input type="text" name="name" placeholder="" class="uk-form-success">
   <span class="error">* <?php echo $nameErr;?></span>
   <br></h4>
   <h4 class="detail1">E-mail:<input type="text" name="email" placeholder="" class="uk-form-success">
   <span class="error">* <?php echo $emailErr;?></span>
   <br></h4>
   <h4 class="detail2">password:<input type="password" name="pass" placeholder="" class="uk-form-success">
   <span class="error">* <?php echo $passErr;?></span>
   <br></h4>
   <span class="error"> <?php echo $loginerror;?></span>
   <br>
      <button class="uk-button">
   confirm
   </button>


   </fieldset>
</form></TD>
</TR>
</TABLE>
</body>
</html>
