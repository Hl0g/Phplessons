<?php
ob_start();
require_once __DIR__ . '/functions.php';
$name = trim($_POST['full_name'] ?? null);
$login = trim($_POST['login'] ?? null);
$password = trim($_POST['pwd'] ?? null);
if(!empty($name) && !empty($password) && !empty($login)){
		$path = './users/';
		if (file_exists($path.'user_'.$login)){
			print_r ('error');
			
		}
		else {
			mkdir($path, 0777);
		add_user($name, $login, $password, $path);	
		header('Location: /index.php');
		}
}
ob_end_flush();
exit;
