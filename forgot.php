<!DOCTYPE html>
<html>
 <head>
  <title>Password help assistance</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="forgot.css" />
	
	
	
 </head>
 <body onLoad="resizeWindow();">
	<div class="rcenter rwrapper">
		<div class="rheader">
			<div class="rfloatL rpasshelpSprite rlogo"></div>
			<div class="rfloatR f16"></div>
			<div class="rclear"></div>
			<div class="padt15 ralignC rbold f16">Forgot your password?</div>
		</div>
		
			
			<form  method="post" action="check.php">
					<div class="form-elements">
					<div class="rfloatL field0">My email ID is</div>
					<div class="rfloatL colon">:</div>
					<div class="rfloatL text-field"><input class="rTextfield" id="txtlogin" name="txtlogin" type="text" value=""  autocomplete="off"/></div><br><br>
			<input type="submit" name="submit" value="submit">
            </form> 	
	
 </body>
</html>