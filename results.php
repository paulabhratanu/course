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

<li><a href="index.php">Home</a></li>
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
<div id="shopping_cart">
<span style="float:right;font-size:18px;padding:5px;line-height:40px;">
Welcome Guest! <b style="color:yellow"> Shopping Cart -</b>Total Items:Total price:<a href="cart_ece.php" style="color:yellow">Go to cart</a>
</span>






</div>


<div id="proucts_box">
<?php
if(isset($_GET['search'])){

	$search_query=$_GET['user_query'];
$get_pro= "select * from products_ece where product_keywords like '%$search_query%' ";
$run_pro=mysqli_query($con,$get_pro);
while($row_pro=mysqli_fetch_array($run_pro)){
	$pro_id=$row_pro['product_id'];
	$pro_cat=$row_pro['product_cat'];
	$pro_title=$row_pro['product_title'];
	$pro_price=$row_pro['product_price'];
	$pro_image=$row_pro['product_image'];
	echo"

       <div id='single_product'>

	 <h3>$pro_title</h3>
     <img src='admin_area/product_images/$pro_image' width='180' height='180'/>
	 <p><b>Rs $pro_price</b></p>
	 <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>

	 <a href='index_ece.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>



	 </div>


	";





}
}
?>


</div>
</div>
</div>


<div id="footer">
<h2 style="text-align:center;padding-top:30px;">&copy;2015 by www.aaa.com</h2>

</div>



</body>
</html>
