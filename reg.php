<?php
require_once __DIR__ . '/bootstrap.php';
$name = trim($_POST['full_name'] ?? null);
$login = trim($_POST['login'] ?? null);
$password = trim($_POST['pwd'] ?? null);
$valid = validate($login,$password);
if(!empty($name) && !empty($password) && !empty($login)){
	$path = './users/';
	if (file_exists($path.$login)){			
	} else {
		if(!file_exists($path)){
			mkdir($path, 0777);	
		}
		if($valid===true){
			add_user($name, $login, $password, $path);
			header('Location: /index.php');
		}else{
			echo($valid);		
		}	
	}
}
exit;
