
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">

    <?php
    if ($status):
        ?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done!</h4>
        </div>

    <?php
    else:
        ?>

        <div class="alert alert-danger">
            <h4 class="alert-heading">Record aleready issets !</h4>
            <p>the room # <?= $params['room_id'] ?> is bussy by</p>
            <p class="mb-0"><?= $params['user_name'] . ' ' . $params['user_lastname'] ?> for the
                date <?= $params['date'] ?></p>
        </div>

    <?php
    endif;
    ?>
</div>

</body>
</html>

