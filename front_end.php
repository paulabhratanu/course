<html>
<head>
 <link rel="stylesheet" href="../test_1/css/uikit.min.css" />
  <link rel="stylesheet" href="../test_1/css/uikit.gradient.min.css"/>
   <link rel="stylesheet" href="../test_1/front_end.css"/>
  <script src="../test_1/js/jquery.js"></script>
 <script src="../test_1/js/uikit.min.js"></script>

   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

      <script type="text/javascript" language="javascript">

         $(document).ready(function() {

            $("#hide").click(function(){
               $(".target").hide( "explode", {pieces: 8 }, 3000 );
            });

          $("#hide_1").click(function(){
               $(".target_1").hide( "explode", {pieces: 8 }, 3000 );
            });



         });

      </script>
</head>
<body>
<div id="banner"><h1>WELCOME</h1></div><br>
<h3><strong>You are just only one step away from taking the online practice test.This practice test contains various programming sections which will<br>
help you to judge your knowledge against others.<br>Be ready to face some of the toughest chalenges and try to solve it in min time.
At the end you will be provided with marks and you can also view your ranking against others.So just press the signin button
and go!!!!.</strong>
</h3>
<img class="two" src="../test_1/animated-book-image-1.gif" width="100" height="140">
<img class="three" src="../test_1/animated-book-image-2.gif" width="100" height="140">
<div id="login">
<form method="get" action="../test_1/log_in.php">
<p><input type="submit" value="sign in"  class="target" id="hide"></p>

</form>
<form method="get" action="../test_1/register.php">

<p><input type="submit" value="sign up"  class="target_1" id="hide_1"></p>

</form>
<marquee style="z-index:2;position:absolute;left:18px;top:157px;font-family:Cursive;font-size:14pt;color:#ffcc00;height:200px;"scrollamount="3" direction="down">(accidental_coder)</marquee>
<marquee style="z-index:2;position:absolute;left:1100px;top:187px;font-family:Cursive;font-size:14pt;color:#ffcc00;height:100px;"scrollamount="3" direction="down">(accidental_coder)</marquee>




</body>
</html>
