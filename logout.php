<html>
<body>
<?php
session_start();
setcookie('username', '', time()-3600, '/');
$_SESSION['user_6']='\0';
$_SESSION['user_5']='\0';
 header('Location: front_end.php');
?>
</body>
</html>