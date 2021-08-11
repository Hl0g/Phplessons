<?php
$include = include_once "./Function.php";
$filename = 'chat.txt.';
$name = trim($_POST['name'] ?? null);
$message = trim($_POST['msg'] ?? null);

if(!empty($name) && !empty($message)){
	add_msg($name, $message, $filename);	
}

header('Location: /index.php');  	