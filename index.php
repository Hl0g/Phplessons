<html>
	<?php
	require_once __DIR__ . '/bootstrap.php';
	?>
	<head>
		<meta charset="utf-8">
		<title>
			Otpravka Form
		</title>
	</head>	
	<body>
		<?php	
			$file = fopen('chat.txt', 'r');
			while($chatline = fgets($file)) {
				$chat = json_decode($chatline, true);
			}
			fclose($file);
			if ($user){
		?>
		<form action='./logout.php' enctype='multipart/form-data' method='post' >
			<textarea></textarea>
			<button type='submit'>Logout</button>
		</form>	
		<?php 
			} else {
		?>
		<form action="./auth.php" enctype="multipart/form-data" method="post">
			<div>
				 Login
			</div>
			<input name="login" type="text" maxlength="40" size="45" placeholder="Name">
			<div>Password</div>
			<input type="password" name="password">
			<div><input type="submit" name="knpopka"></div>
			<div> create a free account - <a href="/register.php"> registration</div>
		 </form>	
		<?php 
			};
		?>
	</body>
</html>