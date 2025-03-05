<?php

define('USERNAME', 'admin');
define('PASSWORD', 'password');

echo "Enter your username:";
$username= readline();
echo "Enter your password:";
$password= readline();

if(empty($username) || empty($password)){
    echo "Username and password are required.\n";
} elseif ($username === USERNAME && $password === PASSWORD) {
    echo "You are logged in .\n";
} else {
    echo "Username or Password is wrong.\n";
}