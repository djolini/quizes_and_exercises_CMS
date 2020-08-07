<?php


 if (isset($_POST['submit'])) {
   $file = $_FILE['file']; //file i zagradi je name tamo u htmlu

   //print_r($file);

   $fileName = $_FILES['file']['name'];
   $fileTmpName = $_FILES['file']['tmp_name'];
   $fileSize = $_FILES['file']['size'];
   $fileError = $_FILES['file']['error'];
   $fileType = $_FILES['file']['type'];

   $fileExt = explode('.' , $fileName );
   $fileActualExt = strtolower(end($fileExt));

   $allowed = array('jpg','jpeg','png','pdf');

   if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 1000000) {
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        $fileDestination = 'uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName,$fileDestination); //built in function
        header("Location: index.php?uploadsuccess");
      }else {
        echo "Your file is too big";
      }
    } else {
    echo "There was an error uploading your file!";
    }
   }else {
     echo "You cannot upload files of this type!";
   }
 }
