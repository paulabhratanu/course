<html>
<head>
<link rel="stylesheet" href="questions.css" />
    <script>
        myFunction()
        {
         <?php header('location : google.com') ?>
        }
    </script>

</head>
<body>
<form action="questions.php"method="post" enctype="multipart/form-data" class="style">
  <?php

session_start();
$j=1;
$count=0;
$a=array();
$con = mysql_connect("localhost","root","");
 mysql_select_db("minor", $con);
 print('<h2>Practice</h2>');
 if(isset($_GET['go']))
 {
  $_SESSION['store']=(isset($_GET['sent'])    ? $_GET['sent']    : '');
 $tyu=$_SESSION['store'];
 }
 $tyu=$_SESSION['store'];
 $result = mysql_query("SELECT questions FROM $tyu");
            while($row = mysql_fetch_array($result))
         {
             $temp=$row['questions'];
             echo "<h4>";
             echo nl2br("\n$temp");
             echo "</h4>";

            print('<textarea  name="sol[]" rows="5" cols="40"></textarea>');
              //$i++;

          }
          if(isset($_POST['submit']))
          {
         for($i=0;$i<count($_POST["sol"]);$i++)
         {
            $check=$_POST["sol"][$i];
            $result = mysql_query("SELECT correct_soln FROM $tyu where ques_no='$j'");
            while($row = mysql_fetch_array($result))
            {
             $check_1=$row['correct_soln'];
            $j++;
            if($check==$check_1)
            {
             echo "correct";
            }
            else{
            echo "wrong";
            $count++;
            }
           }

          }
          echo "$count";
          if($count>=3)
             {
        print  ('<div class="confirm">
  <h1>TOO MANY WRONG ANSWERS</h1>
  <p>you are not prepared to give the online test </p>
<button autofocus onclick="myFunction()">exit</button>');
  }
  else
  {
        print  ('<div class="confirm">
  <h1>WELL DONE</h1>
  <p>you are  prepared to give the online test </p>
<button autofocus onclick="myFunction()">exit</button>');
  }
          }
         // print ('');
          // print ('');
           //print ('');

 ?>

</div>

    <br>
    <input type="submit"   name="submit" value="submit">
    </form>

</body>
</html>
