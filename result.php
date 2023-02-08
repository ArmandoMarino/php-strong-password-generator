<?php
include __DIR__ .  '/./functions.php';

session_start();
if(empty($_SESSION['password-exist'])){
    header('Location: index.php');
}
// VARIABLE PASSED and named same to first variable(into functions.php) BY INDEX.PHP
$user_length = $_SESSION['password-length'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="mt-4 container text-center d-flex justify-content-center">
        <div class="card w-50">
            <h4>Your Password is :</h4>
            <p> <strong><?= randomPassword($user_length)?></strong></p>
        </div>
        
    </div>
    

</body>
</html>