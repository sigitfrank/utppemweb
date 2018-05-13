<html>
	<head>
	<title>SIGN IN</title>
	<?php
	include 'koneksi.php';
	?>
	
	<link rel="stylesheet" href="style.css">
	</head>
	

	<body background="background.jpg">
		<div class="loader">
			<center><h4>Sign In</h4>
			<form method ="POST"  action="login.php">
			<center>
			<input type="text"  name="email" class="textbox" placeholder="Email"></input>
			<input type="text"  name="username" class="textbox" placeholder="Username"></input>
			<input type="password"  name="password" class="textbox" placeholder="Password"></input
			<span style="padding-left:2em"><input type="submit" name="login" size="5px" value="Login" id="button"></span>
			<font size="3px" color="white"></a>Don't have an account?<span style="padding-left:0.5em"><a href=buatakun.php><font size="3px" color="white">Create Here!</a>		
				
			</center>
		</form>	
	
		
		
		</div>
	
	</body>
</html>
