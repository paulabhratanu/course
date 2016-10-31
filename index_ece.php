<!DOCTYPE>
<?php
include("functions_ece/functions_ece.php");

?>
<html>
<head>
<title>online shop</title>
<link rel="stylesheet" href="styles/style.css"media="all" />
</head>
<body>
<div class="main_wrapper">
<div class="header_wrapper">





</div>
<div class="menubar">
<ul id="menu">

<li><a href="/test_1/front_page.html">Home</a></li>
<li><a href="all_products.php">All products</a></li>
<li><a href="customer/my_account.php">My account</a></li>
<li><a href="#">Sign up</a></li>
<li><a href="cart.php">Shopping cart</a></li>
<li><a href="#">Contact us</a></li>
</ul>
<div id="form">
<form method="get" action="results.php" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="search a product"/>
<input type="submit" name="search" value="Search"/>
</form>
</div>
</div>
<div class="content_wrapper">

<div id="sidebar">
<div id="sidebar_title">Categories</div>
<ul id="cats">




<?php getcats(); ?>

</ul>


</div>
<div id="content_area">
<?php cart();?>
<div id="shopping_cart">
<span style="float:right;font-size:18px;padding:5px;line-height:40px;">
Welcome Guest! <b style="color:yellow"> Shopping Cart -</b>Total Items: <?php total_items(); ?> Total price: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Go to cart</a>
</span>







</div>
<?php echo $ip=getIp();?>


<div id="proucts_box">
<?php getPro();?>
<?php getcatPro(); ?>

</div>
</div>
</div>


<div id="footer">
<h2 style="text-align:center;padding-top:30px;">&copy;2015 by www.(accidental_coder).com</h2>

</div>



</body>
</html>
