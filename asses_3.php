<!DOCTYPE html>

<head>
<link rel="stylesheet" href="asses_style.css" />
<div style="font-weight: bold" id="quiz-time-left"></div>
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
 window.location='insert.php';
}
document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds';
setTimeout("CheckTime()",999);
}
function CheckTime(){
if(max_time==0&&c_seconds==0)
{
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
 $_SESSION['user_4']=$_SESSION['user'];
   $user=$_SESSION['user_4'];
   $_SESSION['test_3']=$_SESSION['varname_2'];
   $c=$_SESSION['test_3'];
    $ans_1_status = 'unchecked';
  $ans_2_status = 'unchecked';
  $ans_3_status = 'unchecked';
  $ans_4_status = 'unchecked';
  //$rty=$_SESSION['countq3'];
  //echo "$rty";
  $result = mysql_query("SELECT q4 FROM users where username='$user'");
            while($row = mysql_fetch_array($result))
         {
             $temp=$row['q4'];


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
   $_SESSION['retrieve_2']=$_SESSION['countq3'];
  $inc_2=$_SESSION['retrieve_2'];
   $_SESSION['value_2_2']=(isset($_GET['name_3'])    ? $_GET['name_3']    : '');
   //$selected_radio_2 = (isset($_GET['name_3'])    ? $_GET['name_3']    : '');
   $name=$_SESSION['value_2_2'];
   $_SESSION['radio_2']=$_SESSION['value_2_2'];
 // $_SESSION['next_radio']=$_SESSION['temp_1'];

   //echo "$c";

      $sql = mysql_query("UPDATE solutions SET soln='$name' where quesname='$c' and username='$user'");
	  if($inc_2>0)
	  {
	   if ($_SESSION['temp_2'] == "$name_1") {

$ans_1_status = 'checked';

}
if ($_SESSION['temp_2']== "$name_2") {

$ans_2_status = 'checked';

}
if ($_SESSION['temp_2'] == "$name_3") {

$ans_3_status = 'checked';

}
if ($_SESSION['temp_2'] == "$name_4") {

$ans_4_status = 'checked';

}
 }
}
 if(isset($_GET['back']))
 {
 $inc_3=$_SESSION['retrieve_3'];
 $inc_3=$inc_3+1;
 $_SESSION['countq4']=$inc_3;
 $_SESSION['temp_3']=(isset($_GET['name'])    ? $_GET['name']    : '');
  //$selected_radio_1=$_SESSION['value'];
  $selected_radio_3 = $_SESSION['radio_3'];

if ($selected_radio_3 == "$name_1") {

$ans_1_status = 'checked';

}
if ($selected_radio_3 == "$name_2") {

$ans_2_status = 'checked';

}
if ($selected_radio_3 == "$name_3") {

$ans_3_status = 'checked';

}
if ($selected_radio_3 == "$name_4") {

$ans_4_status = 'checked';

}

 }
?>
<form  method="get">
<table width="100%" border="1" >
  <tr>
    <th width="4%" height="40" scope="col"><p>Q4.</p></th>
   <th width="96%" scope="col" align="left"><p><?php
   $con = mysql_connect("localhost","root","");
   mysql_select_db("minor", $con);
      //$_SESSION['var_4']=$_SESSION['var_3'];
         //$ans_1=$_SESSION['var_4'];


   echo "$temp";

   $_SESSION['varname_3']=$temp;

   ?></p></th>

  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_4" value="<?php  echo "$name_1";?>"onclick='docheck(this);'
<?PHP print $ans_1_status;?>></th>
    <td><?php  echo "$name_1";?></td>
  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_4" value="<?php  echo "$name_2";?>"onclick='docheck(this);'
<?PHP print $ans_2_status;?>></th>
    <td><?php  echo "$name_2";?></td>
  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_4" value="<?php  echo "$name_3";?>"onclick='docheck(this);'
<?PHP print $ans_3_status;?>></th>
    <td><?php  echo "$name_3";?></td>
  </tr>
  <tr>
    <th scope="row"><input type="radio" name="name_4" value="<?php  echo "$name_4";?>"onclick='docheck(this);'
<?PHP print $ans_4_status;?>></th>
    <td><?php  echo "$name_4";?></td><br>
  </tr>
</table><br>
<?php
$_SESSION['user_2']=$_SESSION['user_4'];
$_SESSION['radio_2']=$_SESSION['value_2_2'];
?>
<input type="submit" style="float: left; width: 100px; height: 50px;" name="back" value="back" formaction="asses_2.php">
<input type="submit" style="float: right; width: 100px; height: 50px;" name="next" value="next" formaction="asses_4.php">
</form>


</body>
</html>
