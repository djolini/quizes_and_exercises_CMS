<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    body{
      margin:25px;
    }
  </style>
  <body>

    <?php
    require 'navigation.php';
    require 'LogoutModal.html';
    ?>

<i class="fa fa-question-circle" aria-hidden="true" title="Blueprints archive"></i>
    <div class="text-center">
      <form class="" enctype="multipart/form-data" action="upload.php" method="post">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
      </form>
    </div>
    
    <br><br>

    <?php require 'footer.php'; ?>

  </body>
</html>
