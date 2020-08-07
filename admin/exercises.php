<?php

$servername = "localhost";
$username = "root";
$dbname = "my_ltcode";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "SELECT * FROM categories" ;
// prepare query statement
$stmt = $conn->prepare($sql);
//executes the statement
$stmt->execute();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <title>admin panel</title>
  <style media="screen">
    body{
      margin:25px;
    }
    #btn {
      margin-top:100px;
    }
  </style>
  </head>
  <body>

<?php
include 'navigation.php';
require 'LogoutModal.html';
 ?>

    <i class="fa fa-question-circle" aria-hidden="true" title="you can add a new exercise"></i>

    <div class="text-center">
        <h2><u> Add a new exercise </u></h2> <br>
        <form class="myForm" action="exercises_handle.php" method="post">

              <div class="form-group">
                  <label for="exampleFormControlSelect1">Select category</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                      <?php
                         while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                           echo "<option>". $row["category"] . "</option>";
                            }
                        ?>
                 </select>
            </div>  <br><br><br>

             <textarea name="question" rows="5" cols="40" placeholder="Question(objective)" required></textarea><br>
             <input type="text" name="text_infront" placeholder="text_infront" required> <br>
             <input type="text" name="text_behind" placeholder="text_behind" required> <br><br><br>
             <input type="text" name="answer" value="" placeholder="Correct answer:(copy-paste correct answer)" required>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>   <br>
        </form>

    </div>  <br><br><br>

  <?php require 'footer.php'; ?>

  </body>
</html>
