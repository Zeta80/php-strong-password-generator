<?php
session_start();

$desired_length = $_GET["text-psw"] ?? "";
var_dump($desired_length);

if ($desired_length) {
    $_SESSION["lenght"] = $desired_length;
    header("Location: ./hereYourPsw.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container text-center">
        <h1> !Strong Generator Password :D </h1>
        <div class="wrapper-form">
            <form action="index.php" method="GET">
                <label for="text-psw">Inserire la lunghezza che desidera</label>
                <input type="text" id="text-psw" name="text-psw">
                <div class="buttons mt-4">

                    <button class="btn btn-primary" type="submit">Invia</button>
                    <button class="btn btn-secondary" type="reset">Annulla</button>

                </div>
            </form>

        </div>
    </div>
</body>

</html>