<?php
require_once __DIR__ . '/functions.php';
$login = trim($_POST['login'] ?? null);
$password = trim($_POST['password'] ?? null);
if(!empty($password) && !empty($login)){
$file = fopen('./users/user_'.$login, 'r');
while($cred = fgets($file)) {
	$data = json_decode($cred, true);
}
fclose($file);
if ($password===$data['password']){	
	setcookie('token', 'token', time() +3600);
header('Location: /index.php');  	
}
}
