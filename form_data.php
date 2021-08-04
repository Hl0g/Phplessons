<?php
function add_msg($filename, $name, $message){
	$file = fopen($filename, 'a');
		$message = [
			'name' => $name,
			'message' => $message,
			'date' => date("d.m.Y H:i:s.")
		];
		fwrite($file, json_encode($message) . PHP_EOL); 
		fclose($file);		
}
$filename = 'chat.txt';
$message = trim($_POST['msg'] ?? null);
$name = trim($_POST['name'] ?? null);
if(!empty($name) && !empty($message)) {
	add_msg($filename, $name, $message);
}
header('Location: /index.php');