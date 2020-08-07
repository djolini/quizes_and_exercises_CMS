<?php
if (isset($_POST['submit'])) {
  $question = $_POST['question'];
  $text_infront = $_POST['text_infront'];
  $text_behind= $_POST['text_behind'];
  $answer= $_POST['answer'];

}
else {
  echo "Submit is not set";
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_ltcode";


  try{
      $conn = new PDO("mysql:host=" .$servername . ";dbname=" . $dbname,$username, $password);
      $data = [
          'question' => htmlentities($question),
          'text_infront' => htmlentities($text_infront),
          'text_behind' => htmlentities($text_behind),
          'answer' => htmlentities($answer)
      ];

      $sql = "INSERT INTO exercises (question, text_infront, text_behind,answer) VALUES (:question, :text_infront, :text_behind, :answer)";
      $stmt= $conn->prepare($sql);
      $stmt->execute($data);
      echo "The exercise record has been created successfully"."<br>";
      echo "<a href='exercises.php'>Add a new exercise</a>";
  }catch(PDOException $exception){
      echo "Connection error: " . $exception->getMessage();
  }
