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
function checktoken($token){
	$Usertoken='token';
	if ($token==$Usertoken){
		return true;	
	}
	else { 
		return false; 
	}
}
function add_user($name, $login, $password, $path){
	$file = fopen($path.'user_'.$login, 'a');
	$data = [
			'name' => $name,
			'login' => $login,
			'password' => $password,
			'date' => date('d.m.Y. h:m:i.')
	];
	fwrite($file, json_encode($data) . PHP_EOL);
	fclose($file);
}
