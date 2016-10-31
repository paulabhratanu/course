
<!doctype html>
<html>
<head>
<title>(accidental_coder).com</title>
<link rel="stylesheet" href="style.css" />

   <meta charset="UTF-8">
   <meta name="description" content="engineering study portal">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
 <script type="text/javascript">
     function doSomething(){
      var favorite = prompt('What is your favorite color?', 'RED');
     // OR var favorite = window.prompt('What is your favorite color?', 'RED');

     // if (favorite) equivalent to if (favorite != null && favorite != "");
     if (favorite) {
     alert("Your favorite color is: " +  favorite);
     document.write("fav:" + favorite);
     }
     else alert("You pressed Cancel or no value was entered!");
      }

</script>
</head>
<body>
<div id="wrapper">
<div id="header">
<h1>(ACCIDENTAL_CODER).com</h1>
</div><!--end of header-->
<div id="cssmenu">
<ul>
<li><a href="#">HOME<a></li><li>
<a href="home.php" onclick="doSomething()">QUESTIONS<a>
<ul>
<li><a href="#">data stracture<a></li>
<li><a href="select.php">c<a></li>
<li><a href="#">c++<a></li>
<li><a href="#">computer organization<a></li>
</ul>
</li><li>
<a href="#">RANKINGS<a>
<ul>
<li><a href="sort.php">C<a></li>
<li><a href="#">java<a></li>
<li><a href="#">c++<a></li>
</ul>
</li><li>
<a href="#">ASSESMENT<a>
<ul>

<li><a href="<?php $name='front_end.php'; echo "$name"; ?> ">C<a></li>
<li><a href="#">java<a></li>
<li><a href="#">c++<a></li>
</ul>
</li><li>

<a href="#">STUDY MATERIAL<a>
<ul>
<li><a href="ecommerce">computer science<a></li>
<li><a href="index_ece.php">electronics<a></li>

</ul>
</li><li>
<a href="#">ABOUT US<a>
<ul>
<li><a href="#">about accidentalcoder.com<a></li>
<li><a href="#">about team member<a></li>
<li><a href="#">contact us<a></li>
<li><a href="#">about directi<a></li>
</ul>
</li>
</ul><br>
<img src="books.jpg" id="image"/> <h2 class="uk-text-success"><center>Bring Out The Best Developer in you</center></h2>
<!--end of image-->
</div><!--end of navigation-->
<div id="bodypart"></div><!--endof bodypart-->
<div id="footer">
    <?php
$con = mysql_connect("localhost","root","");
 mysql_select_db("minor", $con);
 $result = mysql_query("SELECT cnt FROM count");
while($row = mysql_fetch_array($result))
         {
             $temp=$row['cnt'];


          }
          $temp++;

          $sql = mysql_query("UPDATE count SET cnt='$temp'");
?>
<h5>hits:<?php echo "$temp"; ?></h5>
<script><script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
            <script src="https://connect.facebook.net/en_US/all.js"></script>
            <script type="text/javascript">
                FB.init({
                    appId  : '1420154948223014',
                    status : true,
                    cookie : true,
                    xfbml  : true,
                });
            </script>
            <script type="text/javascript" src="script.js"></script>
ript', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
            <div class="fb-like" data-href="http://www.facebook.com/accidental_coder" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
 <p>copyright@accidental_coder.com</p>

</div><!--end of footer-->
</div><!--end of wrapper-->
<div id="fb-root"></div>
<div id="fb-root"></div>
</html>
