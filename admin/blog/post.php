<?php

session_start();
include_once('database.php');

if (isset($_POST['post'])) {
  $title = strip_tags($_POST['title']);
  $content = strip_tags($_POST['content']);

  $title = mysqli_real_escape_string($db,$title);
  $content = mysqli_real_escape_string($db,$content);

  $date = date('l jS \of F Y h:i:s A');

  $sql = "INSERT INTO posts(title,content,date) VALUES ($title,$content,$date);";

  if ($title == "" || $content = "") {
    echo "Please complete your post!";
  }

  mysqli_query($db,$sql);

  header("Location :index.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog - Post</title>
  </head>
  <body>
    <form action="post.php" method="post" enctype="multipart/form-data">
      <input type="text" name="title" placeholder="Title"><br>
      <textarea name="content" rows="20" cols="50" placeholder="content"></textarea><br>
      <button type="submit" name="post">Post</button>
    </form>
  </body>
</html>
