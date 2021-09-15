<?php
/*function add_msg($name, $message, $filename){
	$file = fopen($filename, 'a');
		$message = [
			'name' => $name,
			'message' => $message,
			'date' => date('d.m.Y. h:m:i.')
		];
		fwrite($file, json_encode($message) . PHP_EOL);
		fclose($file);
}*/
function add_user($name, $login, $password, $path){
	$file = $path. '/' . $login. '.json';
	$data = [
			'name' => $name,
			'login' => $login,
			'password' => $password,
			'date' => date('d.m.Y. h:m:i.')
	];
	file_put_contents($file, json_encode($data) . PHP_EOL);

}
function getUser($login, $password, $path){
	 if (empty($login) || empty($password)){
		 return false;
	 } 
	 $fullpath = $path. '/' . $login. '.json';
	 if (!file_exists($fullpath)){  
		return false;
	 }
	 $user = file_get_contents($fullpath);
	 $user = json_decode($user, true);
	 if($user['password'] !== $password){
		return false;
	 }
	 return $user;
}
function auth($login, $password){
	if(!empty($password) && !empty($login)){
		setcookie('login', $login, time() +3600);
		setcookie('password', $password, time() +3600);
	}
}
function validate ($login,$password){
	$trigger= true;
	$output= '';
	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{5,12}$/', $password)){ 
		$output.=('the password does not meet the requirements!<br>');
		$trigger = false;
	}
	if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{3,12}$/', $login)) {  
		$output.=('the login does not meet the requirements!<br>');
		$trigger = false;
	}
	if($trigger){
		return true;
	}else{
		return $output;
	}
}
