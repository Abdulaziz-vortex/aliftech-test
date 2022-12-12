<?php

$room = $req->parametrs[0];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h2>Бронирование кабинета # <?= $room ?></h2>

        <form action="../check" method="post">
            <div class="row">
                <div class="mb-3 col">
                    <label for="username" class="form-label">Name</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="mb-3 col">
                    <label for="exampleInputPassword1" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="lastname" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Date</label>
                <input type="date" class="form-control" name="date">
            </div>
            <input type="hidden" name="room" value="<?= $room ?>">
            <input type="submit" class="btn btn-primary" name="booking_form" value="Submit">
        </form>

    </div>
</div>

</body>
</html>
