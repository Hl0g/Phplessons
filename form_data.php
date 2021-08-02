<?php
function add_msg($name, $message){
	$file = fopen('chat.txt', 'a');
		$message = [
			'name' => $name,
			'message' => $message.= date("\ y.m.d.\ H:m:s."),
		];
		fwrite($file, json_encode($message) . PHP_EOL); 
		fclose($file);
		
	}
$message = trim($_POST['msg'] ?? null);
$name = trim($_POST['name'] ?? null);
if(!empty($name) && !empty($message)) {
	add_msg($name, $message);
}
header('Location: /index.php');