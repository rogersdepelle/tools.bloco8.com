<?php require_once 'templateInheritance/index.php' ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
    Block 8 Text Tools |
    <?php startblock('meta_title') ?><?php endblock() ?>
  </title>
  <meta name="description" content="<?php startblock('meta_description') ?><?php endblock() ?>">
  <meta name="keywords" content="<?php startblock('meta_keywords') ?><?php endblock() ?>">
  <meta name="author" content="@rogersdepelle">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <style>
    html {
      position: relative;
      min-height: 100%;
    }
    body {
      margin-bottom: 60px;
    }
    .footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 60px;
      line-height: 60px;
      background-color: #f5f5f5;
    }
  </style>

</head>
<body>

<div class="container">
  <h1 class="pt-4">
    <?php startblock('title') ?><?php endblock() ?>
  </h1>
  <h2 class="h5"><?php startblock('description') ?><?php endblock() ?></h2>

  <?php startblock('form') ?><?php endblock() ?>

  <div class="row">
    <div class="col">
      <div class="card mr-3">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mr-3">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mr-3">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mr-3">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

  <article class="justify pt-4">
    <?php startblock('article') ?><?php endblock() ?>
  </article>

</div>
<footer class="footer">
  <div class="container text-center">
    <span class="text-muted ">
      made with love by <a href="https://github.com/rogersdepelle" target="_blank">@rogersdepelle</a>
    </span>
  </div>
</footer>
</body>
</html>