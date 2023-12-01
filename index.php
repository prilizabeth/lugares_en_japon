<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lugares en Japón</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Lugares en Japón</h1>

    <div class="container text-center">
        <div class="row justify-content-evenly">
            <!--  -->

    <?php
    require 'data.php';

    $places = japan_data();
    foreach ($places as $place) {
        ?>
        <div class="col-md-3 m-2">
        <div class="card" style="width: 18rem;">
        <img src="<?php echo $place['img'] ?>" class="card-img-top" alt="lugar">
        <div class="card-body">
            <h5 class="card-title"><?php echo $place['nombre'] ?></h5>
            <p class="card-text"><?php echo $place['descripcion'] ?></p>
        </div>
    </div>
    </div>
    <?php
    }
    ?>

          <!--   -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>