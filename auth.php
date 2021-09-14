<?php
require_once __DIR__ . '/bootstrap.php';
$login = trim($_POST['login'] ?? null);
$password = trim($_POST['password'] ?? null);
$valid = validate($login,$password);
if($valid===true){
	auth($login, $password);
	header('Location: /index.php');
}else{
	print_r ($valid);		
}	

