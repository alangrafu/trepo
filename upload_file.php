<?php
$allowedExts = array("zip");
$maxFileSize=10*1024*1024;
$extension = end(explode(".", $_FILES["file"]["name"]));
if (($_FILES["file"]["type"] == "application/zip") && ($_FILES["file"]["size"] < $maxFileSize) && in_array($extension, $allowedExts)){
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
        $extensionKey = array_search($extension, $allowedExts);
      $newname = md5(file_get_contents($_FILES["file"]["tmp_name"])).".".$allowedExts[$extensionKey];
    if (file_exists("upload/" . $newname))
      {
      echo "This file already exists.";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $newname);
      echo "Successfully stored. Thank you!";
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>
