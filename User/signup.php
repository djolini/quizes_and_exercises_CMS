
<?php

// get database connection
include_once '../config/database.php';

// instantiate user object
include_once '../objects/user.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

// set user property values
$user->username = $_POST['signup-username'];
//$user->email = $_POST['signup-email'];
$user->password = base64_encode($_POST['signup-password']);
$user->created = date('Y-m-d H:i:s');

// create the user
if($user->signup()){
    $user_arr=array(
        "status" => true,
        "message" => "Signup successful!",
        "id" => $user->id,
        "username" => $user->username
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Username already exists!"
    );
}
   print_r(json_encode($user_arr));

?>
