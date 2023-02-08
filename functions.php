<?php
$user_length = $_GET['password-length'] ?? '';
var_dump($user_length);

// Here i pass only the value i want to manipulate : $number (generic) and i pass later $user_length
function randomPassword($user_number) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '1234567890';
    $symbols = '£$%&?!';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $user_number; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

echo randomPassword($user_length);


?>