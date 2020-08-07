<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php require '../navigation.php'; ?>
    <br><br>

    <div class="text-center">
      <form class="" enctype="multipart/form-data" action="upload.php" method="post">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
      </form>
    </div>

    <br><br>
    <?php require '..//footer.php'; ?>
  </body>
</html>
