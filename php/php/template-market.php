<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php if(isset($title)) echo $title; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php if(isset($stylesheet)) echo $stylesheet; ?>">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
  </head>
  <body  style="background-image: linear-gradient(white,#F6C6EA)">
    <?php include "navbar-market.php" ?>
    <div class="container">
      <?php if(function_exists('body')) body(); ?>
    </div>
  </body>
</html>
