<html>
	<?php
	ob_start();
	require_once __DIR__ . '/functions.php';
	?>
	<head>
		<meta charset="utf-u8">
	</head>
		<title>
			Otpravka Form
		</title>
	<body>
		<?php	
			$file = fopen('chat.txt', 'r');
			while($chatline = fgets($file)) {
				$chat = json_decode($chatline, true);
			}
			fclose($file);
			$token='';
			if (isset($_COOKIE["token"])){
				$token=$_COOKIE["token"];
			};
			if (checktoken($token)){
		?>
			<form action='./logout.php' enctype='multipart/form-data' method='post' >
				<textarea></textarea>
				<button type='submit'>Logout</button>
			</form>	
		<?php 
			}
			else {
		?>
			<form action="./auth.php" enctype="multipart/form-data" method="post">
				<div>
					 Login
				</div>
				<input name="login" type="text" maxlength="40" size="45" placeholder="Name">
				<div>Password</div>
				<input type="password" name="password">
				<div><input type="submit" name="knpopka"></div>
				<div> create a free account - <a href="./register.php"> registration</div>
			 </form>	
		<?php 
			};
			ob_end_flush();
			exit;
		?>	 	 
</html>