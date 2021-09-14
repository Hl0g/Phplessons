<html>
	<head>
		<meta charset="utf-8">
	</head>
		<title>
			Otpravka Form
		</title>
	<body>
		<form action="./reg.php" enctype="multipart/form-data" method="post">
			<div>Name</div>
			<input type="text" name="full_name" placeholder="Enter yor name">
			<div>Login</div>
			<input type="text" name="login" placeholder="Enter your login">
			<div>Password<div>
			<input type="password" name="pwd" placeholder="Enter your password">
			<div>Confirm your Password</div>
			<input type="password" name="password_confirm" placeholder="Confirm your password">
			<button type="submit">ENTER</button>
			<div> have an account - <a href="/">authorisation</a></div>
		</form>
	</body>
</html>