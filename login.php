<?php
$username = $_POST['username'];
$password = $_POST['password'];

$validUser = "Redseb";
$validPassword = "1234";

echo "You have passed username: $username and a password of : $password";

if ($username == $validUser && $password == $validPassword){
    echo "Welcome to the club pal";
} else {
    echo "Wrong Password or Username";
}
