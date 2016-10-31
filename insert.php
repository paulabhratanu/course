<html>
<head>
<link rel="stylesheet" href="insert.css" />

</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("minor", $con);
$i=0;
$j=0;
$k=0;
$attempted=0;
session_start();
$_SESSION['user_5']=$_SESSION['user'];
 $_SESSION['user_6']=$_SESSION['user_5'];
 $user=$_SESSION['user_6'];
 $_COOKIE['username']=$_SESSION['user_6'];
$username=$_COOKIE['username'];
$temp = mysql_query("SELECT username from register");
while($col = mysql_fetch_array($temp))
{
if ($username==$col['username']){
setcookie("username", $username, time()+3600, "/");
echo 'logged in<br/>';

}
}
if(isset($_GET['finish'])||$_SESSION['time']==NULL)
{


 $name=(isset($_GET['name'])    ? $_GET['name']    : '');
 $_SESSION['test_5']=$_SESSION['varname_4'];
 $e=$_SESSION['test_5'];
 $sql = mysql_query("UPDATE solutions SET soln='$name' where quesname='$e' and username='$user'");
 $result = mysql_query("SELECT ans FROM correct_ans where ques_name='What is complexity of merge sort in worst case?'");
 $result_1=mysql_query("SELECT ans FROM correct_ans where ques_name='What is complexity of quick sort in worst case?'");
 $result_2=mysql_query("SELECT ans FROM correct_ans where ques_name='What is complexity of quick sort in best case?'");
 $result_3=mysql_query("SELECT ans FROM correct_ans where ques_name='What is complexity of bubble sort in worst case?'");
 $result_4=mysql_query("SELECT ans FROM correct_ans where ques_name='What is complexity of heap sort in best case?'");
 $check=mysql_query("SELECT soln FROM solutions where quesname='What is complexity of merge sort in worst case?' and username='$user'");
 $check_1=mysql_query("SELECT soln FROM solutions where quesname='What is complexity of quick sort in worst case?' and username='$user'");
 $check_2=mysql_query("SELECT soln FROM solutions where quesname='What is complexity of quick sort in best case?' and username='$user'");
 $check_3=mysql_query("SELECT soln FROM solutions where quesname='What is complexity of bubble sort in worst case?' and username='$user'");
 $check_4=mysql_query("SELECT soln FROM solutions where quesname='What is complexity of heap sort in best case?' and username='$user'");
 $score=0;
 //$b=$_SESSION['var_5'];

while($row = mysql_fetch_array($result))
{

   while($row_1 = mysql_fetch_array($check))
  {

   if($row[0]==$row_1[0])
  {

   $score=$score+4;
   $i++;
   $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
   $attempted++;
  }else if($row_1[0]==NULL){

	 $score=$score+0;
	 $j++;
	 $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
	  //$attempted++;
    }else{

	  $score=$score-1;
	  $k++;
	 $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
	  $attempted++;
	}
  }
}
while($row_2 = mysql_fetch_array($result_1))
{

   while($row_3 = mysql_fetch_array($check_1))
  {

   if($row_2[0]==$row_3[0])
  {

   $score=$score+4;
   $i++;
   $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
    $attempted++;
  }else if($row_3[0]==NULL){

	 $score=$score+0;
	 $j++;
	 $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
	 // $attempted++;
                           }else{

	                                $score=$score-1;
									$k++;
	                               $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
								    $attempted++;
                                 }
   }
}
while($row_4 = mysql_fetch_array($result_2))
{

   while($row_5 = mysql_fetch_array($check_2))
  {

   if($row_4[0]==$row_5[0])
  {

   $score=$score+4;
   $i++;
   $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
    $attempted++;
  }else if($row_5[0]==NULL){

	 $score=$score+0;
	 $j++;
	 $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
	 // $attempted++;
    }else{

	 $score=$score-1;
	 $k++;
	 $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
	  $attempted++;
     }
  }
}
while($row_6 = mysql_fetch_array($result_3))
{

   while($row_7 = mysql_fetch_array($check_3))
  {

   if($row_6[0]==$row_7[0])
  {

   $score=$score+4;
   $i++;
   $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
    $attempted++;
  }else if($row_7[0]==NULL){

	 $score=$score+0;
	 $j++;
	 $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
	  //$attempted++;
    }else{

	 $score=$score-1;
	 $k++;
	 $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
	  $attempted++;
     }
  }
}
while($row_8 = mysql_fetch_array($result_4))
{

   while($row_9 = mysql_fetch_array($check_4))
  {

   if($row_8[0]==$row_9[0])
  {

   $score=$score+4;
   $i++;
   $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
    $attempted++;
  }else if($row_9[0]==NULL){

	 $score=$score+0;
	 $j++;
	 $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
	  //$attempted++;
    }else{

	 $score=$score-1;
	 $k++;
	 $sql = mysql_query("UPDATE marks SET marks='$score' where username='$user'");
	  $attempted++;
     }
  }
}

print '<table width="200" border="1" align="center">';
print '<tr>';
print '<th scope="col"><p>CORRECT</p></th>';
print '<th scope="col"><p>NO RESPONSE</p></th>';
print '<th scope="col"><p>WRONG</p></th>';
print ' </tr>';
print '<tr>';
print '<th scope="row">';
print  "$i";
print  '</th>';
print '<td>';
print  "$j";
print '</td>';
print '<td>';
print  "$k";
print '</td>';
print '</tr>';
print '</table><br>';
$result_7= mysql_query("SELECT marks FROM marks where username='$user'");
while($row_10 = mysql_fetch_array($result_7))
{
 $marks=$row_10[0];
}
print '<table width="200" align="center" border="1">';
print  '<tr>';
 print   '<th scope="col"><p>Attempted</p></th>';
 print   '<th scope="col">';
 print     "$attempted";
 print  '</th>';
 print '</tr>';
print '</table><br>';
print '<table width="200" align="center" border="1">';
print  '<tr>';
 print   '<th scope="col"><p>Your marks</p></th>';
 print   '<th scope="col">';
 print     "$marks";
 print  '</th>';
 print '</tr>';
print '</table><br>';
}
mysql_query("DELETE FROM solutions");
mysql_close($con);
?>
<div id="login">
<form method="post" action="logout.php">
<field>
<p><input type="submit" value="log out"></p>
</field>
</body>
</html>
