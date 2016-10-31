<html>
<head>
    <style>
  .radio{
   font: 15px Arial, Helvetica, sans-serif;
    color:yellow;
    position:relative;
    left:290px;
    top:150px;
    width:610px;
    padding:60px;
    background:black;
    text-align:center;
    text-transform:uppercase;
    letter-spacing:1px;
    zoom: 1;
    filter: alpha(opacity=50);
    opacity: 2;

	}
	.detail input {
     margin-right : 20px;
}
.detail1 input {
     margin-left : 25px;
}
h1{
font: 35px courier;
}
    </style>
</head>
<body>
   <div class="radio">
    <form method="get" action="questions.php">
        <h1 class="detail"><input type="radio" name="sent" value="easy" >easy</h1>
  <br>
  <h1 class="detail1"><input type="radio" name="sent" value="medium">medium</h1><br>
      <input type="submit" name="go" value="go">
    </form>
    </div>
</body>
</html>
