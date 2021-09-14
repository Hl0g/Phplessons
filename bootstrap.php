<?php
require_once __DIR__ . '/functions.php';
$user = getUser($_COOKIE['login'] ?? null, $_COOKIE['password'] ?? null, __DIR__ .'/users');

