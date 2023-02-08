<?php
include __DIR__ .  '/./functions.php';

if($user_length){
session_start();
// IF PASSWORD EXIST REDIRECT
$_SESSION['password-exist'] = true;
header('Location: result.php');
}

// SESSION IS OPEN AND WE CAN PICK THE NAME OF INPUT, AND SET THE POSSIBLE INVALID CAMP NAMED,
// IN THIS CASE TH NAME IS "INVALID" NOW ITS READY TO BE PASSED TO RESULT.PHP
$_SESSION['password-length'] = $_GET['password-length'] ?? "Invalid";

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
    <div class="container text-center">
        <h1>Strong Password Generator</h1>
        <h3>Genera una password sicura</h3>
        <form action="" method="GET">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Lunghezza password :</span>
                <input type="number" class="form-control" name="password-length" placeholder="Digita qui..." aria-label="Username">
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
            <!-- <a href=""></a>  -->
        </form>

    </div>
    



</body>
</html>