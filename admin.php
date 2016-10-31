<!DOCTYPE>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("minor", $con);

?>
<html>
<head>
<title>Inserting Product</title>


</head>
<body bgcolor="skyblue">
<form action="admin.php"method="post" enctype="multipart/form-data">
<table align="center" width="700" border="2" bgcolor="orange">
<tr align="center">
<td colspan="6"><h2>Insert New Post Here</h2></td>
</tr>
<tr>
<td align="right"><b>question type:</b></td>
<td>
<select name="ques">
<option value="easy">easy</option>
<option value="medium">medium</option>
<option value="hard">hard</option>
</select>
</tr>
<tr>
 <td align="right"><b>question no:</b></td>
 <td>
    <input type="text" name="question_no" rows="5" cols="40">
 </td>
</tr>
<tr>
 <td align="right"><b>question:</b></td>
 <td>
    <textarea name="question" rows="5" cols="40"></textarea>
 </td>
</tr>
<tr>
 <td align="right"><b>solution:</b></td>
 <td>
    <textarea name="solution" rows="5" cols="40"></textarea>
 </td>
</tr>
<tr align="center">

<td colspan="6"><input type="submit" name="insert_post" value="Insert Now" /></td>
</tr>

</table>
</form>
<?php
if(isset($_POST['insert_post']))
{
$type=$_POST['ques'];
$question=$_POST['question'];
$ques_no=$_POST['question_no'];
$soln=$_POST['solution'];
if($type=='easy')

    {
     $insert_product =" insert into easy(questions,correct_soln,ques_no) values('$question','$soln','$ques_no')";
	}
	if($type=='medium')

    {
     $insert_product =" insert into medium(questions,correct_soln,ques_no) values('$question','$soln','$ques_no')";
	}
	if($type=='hard')

    {
     $insert_product =" insert into hard(questions,correct_soln,ques_no) values('$question','$soln','$ques_no')";
	}
	 $insert_pro= mysql_query($insert_product);
	 	 	 if($insert_pro){
		 echo "<script>alert('Product Has Been Inserted!')</script>";
		 echo"<script>window.open('insert_product.php','_self')";
	 }
}

 ?>
