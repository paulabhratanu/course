<!DOCTYPE html>

<head>
<link rel="stylesheet" href="asses_style.css" />
<div style="font-weight: bold" id="quiz-time-left"></div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<SCRIPT type="text/javascript">
	window.history.forward();
	function noBack() { window.history.forward(); }
	var checkedradio;
function docheck(thisradio) {
    if (checkedradio == thisradio) {
        thisradio.checked = false;
        checkedradio = null;
    }
    else {checkedradio = thisradio;}
}
var max_time = <?php $row_2['num_timer']=5;echo $row_2['num_timer'] ?>;
var c_seconds  = 0;
var total_seconds =60*max_time;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
if(max_time==0&&c_seconds==0)
{
 <?php $_SESSION['time']=NULL;?>
 window.location='insert.php';
}
document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds';
function init(){
if(max_time==0&&c_seconds==0)
{
 <?php $_SESSION['time']=NULL;?>
 window.location='insert.php';
}
document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds';
setTimeout("CheckTime()",999);
}
function CheckTime(){
if(max_time==0&&c_seconds==0)
{
 <?php $_SESSION['time']=NULL;?>
 window.location='insert.php';
}

document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds' ;
if(total_seconds <=0){
setTimeout('document.quiz.submit()',1);

    } else
    {
total_seconds = total_seconds -1;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
setTimeout("CheckTime()",999);
}

}
init();

</SCRIPT>
</head>
<body "noBack();" onpageshow="if (event.persisted) noBack();" onUnload="" >

<h3><?php
session_start();
print 'WELCOME:';
$v=$_SESSION['user'];
echo "$v";
?></h3>

<form action="asses_1.php" method="get">

<table width="100%" border="1" >
  <tr>
    <th width="4%" height="40" scope="col"><p>Q1.</p></th>
   <th width="96%" scope="col" align="left"><p><?php

   $con = mysql_connect("localhost","root","");

   mysql_select_db("minor", $con);

   $_SESSION['user_1']=$_SESSION['user'];
   $user=$_SESSION['user_1'];
            $result = mysql_query("SELECT q1 FROM users where username='$user'");

         while($row = mysql_fetch_array($result))
         {
             $temp=$row['q1'];

          }


   echo "$temp";
    $result_1 = mysql_query("SELECT sol_1,sol_2,sol_3,sol_4 FROM questions where ques='$temp'");
	while($row_1 = mysql_fetch_array($result_1))
         {
             $name_1=$row_1['sol_1'];
			 $name_2=$row_1['sol_2'];
			 $name_3=$row_1['sol_3'];
			 $name_4=$row_1['sol_4'];

          }
   $_SESSION['varname'] = $temp;
  $ans_1_status = 'unchecked';
  $ans_2_status = 'unchecked';
  $ans_3_status = 'unchecked';
  $ans_4_status = 'unchecked';
if($_SESSION['ioi']==0)
{
$_SESSION['count_1']=$_SESSION['count'];
$_SESSION['ioi']=1;
}
if (isset($_GET['back'])) {
//$_SESSION['radio']='male';
$inc=$_SESSION['retrieve'];
 $inc=$inc+1;
 //echo "$inc";
 $_SESSION['count_1']=$inc;
 $_SESSION['temp_1']=(isset($_GET['name_2'])    ? $_GET['name_2']    : '');
$selected_radio = $_SESSION['radio'];

if ($selected_radio == "$name_1") {

$ans_1_status = 'checked';

}
if ($selected_radio == "$name_2") {

$ans_2_status = 'checked';

}
if ($selected_radio == "$name_3") {

$ans_3_status = 'checked';

}
if ($selected_radio == "$name_4") {

$ans_4_status = 'checked';

}

}

   ?></p></th>

  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_1"  value="<?php  echo "$name_1";?>"
	   onclick='docheck(this);'
<?PHP print $ans_1_status; ?>></th>
    <td><?php  echo "$name_1";?></td>
  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_1" value="<?php  echo "$name_2";?>"onclick='docheck(this);'
<?PHP print $ans_2_status; ?>></th>
    <td><?php  echo "$name_2";?></td>
  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_1" value="<?php  echo "$name_3";?>"onclick='docheck(this);'
<?PHP print $ans_3_status; ?>></th>
    <td><?php  echo "$name_3";?></td>
  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_1" value="<?php  echo "$name_4";?>"onclick='docheck(this);'
<?PHP print $ans_4_status; ?>></th>
    <td><?php  echo "$name_4";?></td><br>
  </tr>
</table><br>
<input type="submit" style="width: 100px; height: 50px; float:middle " name="next" value="next">
</form>


</body>
</html>
