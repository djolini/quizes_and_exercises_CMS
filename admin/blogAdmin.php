<?php

if (isset($_POST['submit'])) {

   if ($_POST['select'] == 'blog') {
      $blog_or_recommendation = 'blog';
    }else {
      $blog_or_recommendation = 'recommendations';
    }


    $title = $_POST['title'];
    $content = $_POST['content'];


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "my_ltcode";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $data = [
          'title' => $title,
          'content' => $content
      ];

      $sql = "INSERT INTO `$blog_or_recommendation`(title,content)
      VALUES (:title, :content);";
      $stmt= $conn->prepare($sql);

      if ($stmt->execute($data) == TRUE) {
        echo "success";
        echo "<a href='../admin/blogAdmin.php'> Add next blog or recommendation </a>";
      }else {
          echo "error";
         print_r($stmt->errorInfo());
      }

    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>admin panel</title>
  <style media="screen">
    body{
      margin:25px;
    }
  </style>
  </head>
  <body>

    <!-- NAVIGATION AND LOGOUT  -->
  <?php
  include 'navigation.php';
  require 'LogoutModal.html';
   ?>

<br>

<i class="fa fa-question-circle" aria-hidden="true"></i>


      <div class="text-center">

        <h2><u> Blog and recommendations </u></h2>
        <br>

          <form class="" method="post">
              <select class="" name="select">
                <option value="recommendation"> Recommendation </option>
                <option value="blog"> Blog </option>
              </select><br><br><br>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="usr" required>
            </div>

            <div class="form-group">
              <label for="content">Content:</label>
              <input type="text" name="content" class="form-control" id="pwd" required><br>
              <button type="submit" name="submit" class="btn btn-primary">Publish</button>
            </div>
          </form>

        </div>
<br><br><br>


<?php include 'footer.php'; ?>

  </body>
</html>
