<?php
$user_length = $_GET['password-length'] ?? '';
var_dump($user_length);

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
        </form>

    </div>
    



</body>
</html>