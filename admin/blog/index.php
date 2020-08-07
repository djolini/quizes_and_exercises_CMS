<?php
 session_start();
 include_once("database.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
  </head>
  <body>
    <?php

    require_once 'nbbc/nbbc.php';
      $bbcode = new BBCode;

      $sql = "SELECT * FROM posts ORDER BY ID DESC;";

      $res = mysqli_query($db,$sql) or die(mysqli_error() );

      $posts = "";

      if (mysqli_num_rows($res) > 0 ) {
        while ($row = mysqli_fetch_assoc($res) ) {
          $id = $row['ID'];
          $title = $row['title'];
          $content= $row['content'];
        //  $date = $row['$date'];

          $admin = "<div><a href='del_post.php?pid=$id'>Delete</a> &nbsp; <a href='edit_post.php?pid=$id'>Edit</a> </div>";

          $output = $bbcode->Parse($content);

          $posts .= "<div><h2><a href='view_post.php?pid=$id'>$title</a></h2><h3><p>$output</p></h3>$admin<hr /></div>";
        }
        echo $posts;
      }else {
        echo "No posts to display";
      }

     ?>
  </body>
</html>
