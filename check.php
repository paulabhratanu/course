<?php
 if(isset($_POST['submit']))
 {
  $_SESSION['value']=(isset($_POST['txtlogin'])    ? $_POST['txtlogin']    : '');
   $from = $_SESSION['value'];
   $headers = "From:" . $from;
    mail ("paul_abhratanu@rediffmail.com" ,"FORGOT PASSWORD" , "text", $headers);
   echo "<script>alert('reset code sent to your email')</script>";
   header("LOCATION:log_in.php");
  } 
?>