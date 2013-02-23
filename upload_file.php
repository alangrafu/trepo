<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- END OF DON'T TOUCH -->
<!-- Website Title -->
<title>The #Tweets4Science initiative</title>
<!-- END OF Website Title -->
<!--  Website description - Change the 'content' section to whatever you want -->
<meta name="description" content="#Tweets4Science: A Manifesto - We ask you to donate your tweets for research purposes. We will not profit from your information. We will share the collection of donated tweets with anybody interested in research in social media under a Creative Commons license.">
<!-- END OF Website description -->
<!-- DON'T TOUCH THIS SECTION -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Cookie' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="scripts/jquery.carouFredSel-5.5.2.js" type="text/javascript"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script> 
<script type="text/javascript" src="scripts/scripts.js"></script> 
<style>
input{
background:#ccc;
  line-height:24px;
  display:block;
font-size:18px;
}
</style>
</head>
<!-- END OF DON'T TOUCH -->
<body>
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
      echo "<h3>This file already exists.</h3>";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $newname);
      echo "<h3>Successfully stored. Thank you!</h3>";
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>
</body>
</html>
