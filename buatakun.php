<html>
<head><title>Create Account</title></head>
<?php
	include 'koneksi.php';
	?>
	<link rel="stylesheet" href="style.css">

<body background="background.jpg">
		<div class="loader">
			<center><h4>Sign Up</h4>
			<form method ="POST"  action="proses-buatakun.php">
			<center>
			<input type="text" name="email" class="textbox" placeholder="Email" required></input>
			<input type="text" name="username" class="textbox" placeholder="Username" required></input>
			<input type="password" name="password" class="textbox" placeholder="Password" required></input>
			<span style="padding-left:2em"><input type="submit" name="buatakun" size="5px" value="Create" id="button"></span>
			<span style="padding-left:0em"><a href="index.php"><font size="3px" color="white">< Back</a>
			</center>
		</form>	
		</div>
	
	</body>


</html>