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

//document.write(x);
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
<body "noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
<?php
session_start();
$con = mysql_connect("localhost","root","");
 mysql_select_db("minor", $con);
 $_SESSION['user_2']=$_SESSION['user'];
   $user=$_SESSION['user_2'];
   $_SESSION['test_1']=$_SESSION['varname'];
   $a=$_SESSION['test_1'];
  $ans_1_status = 'unchecked';
  $ans_2_status = 'unchecked';
  $ans_3_status = 'unchecked';
  $ans_4_status = 'unchecked';
  $_SESSION['countq2'];
  $result = mysql_query("SELECT q2 FROM users where username='$user'");
            while($row = mysql_fetch_array($result))
         {
             $temp=$row['q2'];


          }

     $result_1 = mysql_query("SELECT sol_1,sol_2,sol_3,sol_4 FROM questions where ques='$temp'");
	while($row_1 = mysql_fetch_array($result_1))
         {
             $name_1=$row_1['sol_1'];
			 $name_2=$row_1['sol_2'];
			 $name_3=$row_1['sol_3'];
			 $name_4=$row_1['sol_4'];

          }
 if(isset($_GET['next']))
{
  $_SESSION['count_2']=$_SESSION['count_1'];
  $_SESSION['retrieve']=$_SESSION['count_2'];
  $inc=$_SESSION['retrieve'];
  //echo "$inc";
   $_SESSION['value']=(isset($_GET['name_1'])    ? $_GET['name_1']    : '');
   //$selected_radio = (isset($_GET['name_1'])    ? $_GET['name_1']    : '');
   $name=$_SESSION['value'];
   $_SESSION['radio']=$_SESSION['value'];

  //$val= $_SESSION['radio_1'];
   //echo "$val";

   $sql = mysql_query("UPDATE solutions SET soln='$name' where quesname='$a' and username='$user'");
   if($inc>0)
   {
    if ($_SESSION['temp_1'] == "$name_1") {

$ans_1_status = 'checked';

}
if ($_SESSION['temp_1'] == "$name_2") {

$ans_2_status = 'checked';

}
if ($_SESSION['temp_1'] == "$name_3") {

$ans_3_status = 'checked';

}
if ($_SESSION['temp_1'] == "$name_4") {

$ans_4_status = 'checked';

}
}
}

 if(isset($_GET['back']))
 {
 $inc_1=$_SESSION['retrieve_1'];
 $inc_1=$inc_1+1;
 $_SESSION['countq2']=$inc_1;

 $_SESSION['temp']=(isset($_GET['name_3'])    ? $_GET['name_3']    : '');
 //$temp_1=$_SESSION['temp'];
 //echo "$temp_1";
  //$selected_radio=$_SESSION['value'];
  $selected_radio_1 = $_SESSION['radio_1'];

if ($selected_radio_1 == "$name_1") {

$ans_1_status = 'checked';

}
if ($selected_radio_1 == "$name_2") {

$ans_2_status = 'checked';

}
if ($selected_radio_1 == "$name_3") {

$ans_3_status = 'checked';

}
if ($selected_radio_1 == "$name_4") {

$ans_4_status = 'checked';

}

 }
?>
<form  method="get">
<table width="100%" border="1" >
  <tr>
    <th width="4%" height="40" scope="col"><p>Q2.</p></th>
   <th width="96%" scope="col" align="left"><p><?php
   $con = mysql_connect("localhost","root","");
 mysql_select_db("minor", $con);
      //$_SESSION['var_2']=$_SESSION['var_1'];
         //$ans_1=$_SESSION['var_2'];



   echo "$temp";

   $_SESSION['varname_1']=$temp;

   ?></p></th>

  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_2" value="<?php  echo "$name_1";?>" onclick='docheck(this);'
<?PHP print $ans_1_status; ?>></th>
    <td><?php  echo "$name_1";?></td>
  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_2" value="<?php  echo "$name_2";?>" onclick='docheck(this);'
<?PHP print $ans_2_status; ?>></th>
    <td><?php  echo "$name_2";?></td>
  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_2" value="<?php  echo "$name_3";?>" onclick='docheck(this);'
<?PHP print $ans_3_status; ?>></th>
    <td><?php  echo "$name_3";?></td>
  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_2" value="<?php echo "$name_4";?>" onclick='docheck(this);'
<?PHP print $ans_4_status; ?>></th>
    <td><?php echo "$name_4";?></td><br>
  </tr>
</table><br>
<input type="submit" style="float: right; width: 100px; height: 50px;" name="next" value="next" formaction="asses_2.php">
<?php
$_SESSION['radio']=$_SESSION['value'];
?>
<input type="submit" style="float: left; width: 100px; height: 50px;" name="back" value="back" formaction="asses.php">
</form>


</body>
</html>
