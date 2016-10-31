<html>
<head>

<link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/uikit.gradient.min.css" />
        <link rel="stylesheet" href="log_in.css" />
        <script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
</head>
<body background="image_3.jpg">
<?php

$con = mysql_connect("localhost","root","");

session_start();
mysql_select_db("minor", $con);
if (!mysql_ping($con)) {
    echo 'Lost connection, exiting after query';
    exit;
}
$nameErr = $emailErr = $loginerror=$passErr = "";
$name = $email = $gender = $pass = "";
$count=0;
$count_1=0;
$min=1;
$max=5;
$random=array(0,1,2,3,4);
$temp_2=array(0,1,2,3,4,5);


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])||empty($_POST["pass"]))
   {

	if(empty($_POST["name"]))
	{
     $nameErr = "username is required";
	}

	if(empty($_POST["pass"]))
	{
     $passErr = "password is required";
	}



 }
 else
 {
     $name = test_input($_POST["name"]);
	 $pass = test_input($_POST["pass"]);






	 $i=md5($pass);
	 $result = mysql_query("SELECT username FROM register");
	     while($row = mysql_fetch_array($result))
         {
             $temp=$row['username'];
			 if($temp==$name)
			 {
			  $count++;
			 }


          }
		  $result_1 = mysql_query("SELECT password FROM register");
	     while($row = mysql_fetch_array($result_1))
         {
             $temp_1=$row['password'];
			 if($temp_1==$i)
			 {
			  $count_1++;
			 }


          }
		if($count>0&&$count_1>0)
		{
		 setcookie("name", $name, time()+3600, "/");
		 $_SESSION['user']=$name;
		 $numbers = range($min, $max);
          shuffle($numbers);
		  for($j=0;$j<5;$j++)
		  {
		  $random[$j]=$numbers[$j];
		  //echo $random[$j];
		  }
		 for($j=0;$j<5;$j++)
		 {
		  $result = mysql_query("SELECT ques FROM questions where quesno=$random[$j]");
		   while($row = mysql_fetch_array($result))
          {
             $temp_2[$j]=$row['ques'];
			 echo $temp_2[$j];

          }
		 }

		  $sql = mysql_query("INSERT INTO users (username,q1,q2,q3,q4,q5)
             VALUES ('$name','$temp_2[0]','$temp_2[1]','$temp_2[2]','$temp_2[3]','$temp_2[4]')");
          $sql = mysql_query("INSERT INTO marks (username)
             VALUES ('$name')");
			 for($k=0;$k<5;$k++)
			 {
			 $sql = mysql_query("INSERT INTO solutions (username,quesname)
             VALUES ('$name','$temp_2[$k]')");
			 }

			 $_SESSION['count']=0;
			 $_SESSION['countq2']=0;
			 $_SESSION['countq3']=0;
			 $_SESSION['countq4']=0;
			 $_SESSION['ioi']=0;
		 header('LOCATION:instruct.php');

		 }



		else
		{
		 $loginerror="wrong username or password";
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

<TD WIDTH="593" HEIGHT="389" BACKGROUND="LOG_IN.png" align="center">
<br><br>
<p><span class="error">* required field.</span></p>
<form class="uk-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset data-uk-margin>
   <h4>Username: <input type="text" name="name" placeholder="" class="uk-form-success">
   <span class="error">* <?php echo $nameErr;?></span>
   <br></h4>
   <h4>password: <input type="password" name="pass" placeholder="" class="uk-form-success">
   <span class="error">* <?php echo $passErr;?></span>
   <br></h4>
   <span class="error"> <?php echo $loginerror;?></span>
   <a href="forgot.php"><h4 class="detail">Forgotten password?</h4></a>
   <a href="register.php"><h4 class="detail1">Not a member?</h4></a>
       <button class="uk-button">
   confirm
   </button>


    </fieldset>
</form></TD>
</TR>
</TABLE>
</body>
</html>
