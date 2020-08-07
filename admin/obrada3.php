<?php

// user input
$input = $_POST['input'];
$correct_answer = $_POST['correct_answer'];

// database params
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exer";

  // connection
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //query
  $data = $conn->query("SELECT question,text_infront,text_infront,correct_answer FROM exercises WHERE ID='1'; ")->fetchAll();
  // and somewhere later:
  foreach ($data as $row) {
      $correct_answer = $row['correct_answer'];
    }


   if ($input== $correct_answer) {
     $user_arr = array(
         "status"=>true,
         "message"=>"Tacan odgovor!"
     );
   }
   else {
     $user_arr = array(
       "status"=>false,
       "message"=>"Pogresan odgovor!"
     );
   }
 //}

print_r(json_encode($user_arr));
