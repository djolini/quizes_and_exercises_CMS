<?php
if (isset($_POST['submit'])) {
  $question = $_POST['question'];
  $first_answer = $_POST['first_answer'];
  $second_answer= $_POST['second_answer'];
  $third_answer = $_POST['third_answer'];
  $fourth_answer = $_POST['fourth_answer'];
  $answer = $_POST['answer'];

}
else {
  echo "error";
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_ltcode";

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $data = [
      'question' => $question,
      'first_answer' => $first_answer,
      'second_answer' => $second_answer,
      'third_answer' => $third_answer,
      'fourth_answer' => $fourth_answer,
      'answer' => $answer
  ];
  $sql = "INSERT INTO quiz(question, first_answer, second_answer,third_answer,fourth_answer,answer) VALUES (:question, :first_answer, :second_answer, :third_answer, :fourth_answer, :answer)";
  $stmt= $conn->prepare($sql);

  if ($stmt->execute($data) == TRUE) {
    echo "The new question has been successfully added to the database."."<br>";
    echo "<a href='../admin/quiz.php'>Add next question</a>";
  }else {
    echo "error";
     print_r($stmt->errorInfo());
  }
