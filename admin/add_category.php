<?php
if (isset($_POST['submit'])) {

  $new_category = strtoupper($_POST['new_category']) ;
//  $new_category = strtoupper($new_category);
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "my_ltcode";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $data = [
          'category' => $new_category
      ];

      $sql = "INSERT INTO categories(category)
      VALUES ( :category)";
      $stmt= $conn->prepare($sql);

      if ($stmt->execute($data) == TRUE) {
        echo "success";
        echo "<a href='../admin/add_category.php'> Add next category </a>";
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
  <style>
    body{
      margin:25px;
    }
  </style>
  </head>
  <body>

    <!-- NAVVV  -->
    <?php
      require 'LogoutModal.html';
      require 'navigation.php';
     ?>

<br>
<i class="fa fa-question-circle" aria-hidden="true" title="Here you can add a new category"></i>

      <div class="text-center">
          <h2><u> Add  a new category </u></h2> <br>

          <div class="form-group">
            <form class="myForm" method="post">
                <input type="text" name="new_category" placeholder="Add a new category"><br><br>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>  <br><br>
            </form>
          </div>
      </div>

<?php include 'footer.php'; ?>

</body>
</html>
