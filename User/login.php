<?php
// include database and object files

include_once '../config/database.php';
include_once '../objects/user.php';

// get database connectionA
$database = new Database();
$db = $database->getConnection();

// prepare user object
$user = new User($db);
// set ID property of user to be edited
if ( $_POST['login-username']!== '' && $_POST['login-password']!== 0)  {
  $user->username = isset($_POST['login-username']) ? $_POST['login-username'] : die();
  $user->password = base64_encode(isset($_POST['login-password']) ? $_POST['login-password'] : die());

}else {
  $user_arr=array(
      "status" => false,
      "message" => "username and password are required :)",
  );
}

// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Login successful!",
        "id" => $row['id'],
        "username" => $row['username']
    );

}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
}
// make it json format
   print_r(json_encode($user_arr));

?>
