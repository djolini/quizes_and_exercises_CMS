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
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>admin panel</title>
  </head>
  <body>

    <!-- NAVVV  -->
    <br>
    <?php
     require 'navigation.php';
     require 'LogoutModal.html';
     ?>

<i class="fa fa-question-circle" aria-hidden="true" title="Here you can create a new quiz question of any type"></i>
<br>

      <div class="text-center">

        <h2><u> Create a new quiz or add a new question </u></h2>
        <br>
        <div id="message">
        </div>

           <div class="text-center">


             <div class="form-group">

              <!-- FORM  -->
               <form class="myForm" action="quiz_handle.php" method="post">
                 <label for="exampleFormControlSelect1">Select category</label>
                 <select class="form-control" id="exampleFormControlSelect1">
                     <?php
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                          echo "<option>". $row["category"] . "</option>";
                           }
                       ?>
                </select> <br><br><br>

               <textarea name="question" rows="5" cols="40" placeholder="Question" required></textarea>
               <br>
               <br>

              <p> Available answers: </p>

               <label class="control-label col-sm-2" for="text"> a: </label>
              <input type="text" size="90" class="form-control" name="first_answer" value="" placeholder="First answer" required>


               <label class="control-label col-sm-2" for="text"> b: </label>
             <input type="text" size="90" class="form-control" name="second_answer" value="" placeholder="Second answer" required>


             <label class="control-label col-sm-2" for="text"> c: </label>
               <input type="text"  size="90"class="form-control" name="third_answer" value="" placeholder="Third answer" required>


             <label class="control-label col-sm-2" for="text"> d: </label>
              <input type="text" size="90" class="form-control" name="fourth_answer" value="" placeholder="Fourth answer" required>   <br>


               <p>Correct answer:(copy-paste correct answer)</p>

               <input type="text" name="answer" value="" placeholder="True answer" required>

               <button type="submit" name="submit" class="btn btn-primary">Submit</button> <br><br>

               </form>
             </div>
          </div>


      </div>
      <br><br>

      <?php require 'footer.php'; ?>

  </body>
</html>
