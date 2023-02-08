<?php
$user_length = $_GET['password-length'] ?? '';
// var_dump($user_length);

// Here i pass only the value i want to manipulate : $user_number (generic)
// and i pass later $user_length, i pass also flags on true and IF are true the initial flag is filled by that string
function randomPassword($user_number, $includeAlphabet = false, $includeNumbers = false, $includeSpecialChars = false) {
    $chars = "";
    if ($includeAlphabet) {
        $chars .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }
    if ($includeNumbers) {
        $chars .= "0123456789";
    }
    if ($includeSpecialChars) {
        $chars .= "!@#$%^&*()_+-=[]{};:\"<>,.?/\\";
    }
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($chars) - 1; //put the length -1 in cache
    for ($i = 0; $i < $user_number; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $chars[$n];
    }
    return implode($pass); //turn the array into a string
}

// echo randomPassword($user_length);


?>