<?php
function add_msg($name, $message, $filename){
	$file = fopen($filename, 'a');
		$message = [
			'name' => $name,
			'message' => $message,
			'date' => date('d.m.Y. h:m:i.')
		];
		fwrite($file, json_encode($message) . PHP_EOL);
		fclose($file);
}