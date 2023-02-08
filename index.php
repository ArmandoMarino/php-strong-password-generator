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
    <!-- STYLE -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container text-center">
        <h1>Strong Password Generator</h1>
        <h3>Make a strong Password</h3>
        <!-- FORM BEGIN---------------->
        <form action="" method="GET" class="myw-50">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password length :</span>
                <input type="number" class="form-control" name="password-length" placeholder="Enter a number..." aria-label="Username">
            </div>

            <!-- CHECK-BOX -->
            <div class=" d-flex justify-content-between align-items-center">
                <p>Allow repetitions of one to more characters :</p>
                <div class="wrapper">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                YES
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                NO
                            </label>
                    </div>
                </div>
            </div>
            
            

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-primary">Generate</button>
            <a href="http://localhost/php-strong-password-generator" class="btn btn-secondary">Cancel</a>
        </form>
        <!-- FORM END--------------- -->

    </div>
    



</body>
</html>