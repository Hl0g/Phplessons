<html>
	<head>
		<meta charset="utf-u8">
	</head>
		<title>
			Otpravka Form
		</title>
			<body>
			<form action="./form_data.php" enctype="multipart/form-data" method="post">
			 Login
			 <input name="name" type="text" maxlength="40" size="45" Value="Name">
			 <div>Инфо</div>
			 <div><textarea name="msg"></textarea></div>
			 <div><input type="submit" name="knpopka"></div>
			 Chat
			 <div>
				<?php
					$include;
					$file = fopen('chat.txt', 'r');
					while($chatline = fgets($file)) {
						$chat = json_decode($chatline, true);
				?>
					<div class="message">
						<div class="login"><?php echo $chat['name'];?></div>
						<div class="text"><?php echo $chat['message'];?></div>
						<div class="date"><?php echo $chat['date'];?></div>
					</div>
				<?php
					}
					fclose($file);
				?>
			 </div>		 
</html>