<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-lg-4">
        <h3>Rooms list</h3>
        <div class="list-group">
            <a href="/booking/1" class="list-group-item list-group-item-action">Room 1</a>
            <a href="/booking/2" class="list-group-item list-group-item-action">Room 2</a>
            <a href="broom_room.php?id=3" class="list-group-item list-group-item-action">Room 3</a>
            <a href="broom_room.php?id=4" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true">Room 4</a>
            <a href="broom_room.php?id=5" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Room 5</a>
        </div>
    </div>
</div>


</body>
</html>
