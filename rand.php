<span id="countdown" class="timer"></span>
<html>
<body>
<div style="font-weight: bold" id="quiz-time-left"></div>
<script type="text/javascript">

var max_time = <?php $row_2['num_timer']=1;echo $row_2['num_timer'] ?>;
var c_seconds  = 0;
var total_seconds =60*max_time;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
if(max_time==0&&c_seconds==0)
{
 window.location='front_end.php';
} 
document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds';
function init(){
if(max_time==0&&c_seconds==0)
{
 window.location='front_end.php';
} 
document.getElementById("quiz-time-left").innerHTML='Time Left: ' + max_time + ' minutes ' + c_seconds + ' seconds';
setTimeout("CheckTime()",999);
}
function CheckTime(){
if(max_time==0&&c_seconds==0)
{
 window.location='front_end.php';
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
</script>
<?php
for($i=0;$i<10;$i++)
{
 echo "$i";
 sleep(2);
 $i++;
}
?> 
<form name="data" action="StopWatch.php" method="post">
<input type ="submit" name="submit" value="submit">
</form>
</body>
</html>