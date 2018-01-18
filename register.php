<?php  


if(isset($_POST['loginButton'])) {
	echo "Login Button Pressed";
	//login button was pressed
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login</h2>
			<p>	
			<label for="loginUsername">UNA Email</label>
			<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. jdoe@una.edu" required>
			</p>
			<p>
			<label for="loginPassword">Password</label>
			<input id="loginPassword" name="loginPassword" type="password" required>
			</p>

			<button type="submit" name="loginButton">Login</button>
		</form>
	</div>

</body>
</html>