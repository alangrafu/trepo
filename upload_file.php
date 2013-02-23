<!DOCTYPE HTML>
<!-- ............................. -->
<!-- ............................. -->
<!-- ..... LIQUID GEM V.1.0. ..... -->
<!-- ............................. -->
<!-- ............................. -->
<!-- ............................. -->
<!-- ............................. -->
<!-- .... MADE BY CHRIS BIRON .... -->
<!-- ............................. -->
<!-- ............................. -->
<!-- ............................. -->
<!-- ............................. -->
<!-- Liquid Gem is licensed under 
          Creative Commons 
 Attribution-NonCommercial-ShareAlike
       3.0 Unported License -->
<!-- ............................. -->
<!-- ............................. -->
<!-- DON'T TOUCH THIS SECTION -->
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
</head>
<!-- END OF DON'T TOUCH -->
<body>
<div class="wrapper">
  <div id="top">
        <div id="logo">
            <h1 id="logotitle">#Tweets4Science</h1>	<!-- Logo text -->
        </div><!--/logo-->
    
        <nav>	<!-- Navigation Start -->
            <ul>
                <li><a href="index.html">Home</a></li>
            </ul>      
        </nav>	<!-- Navigation End -->
    </div><!--/top-->
    
    
    <hr/><!-- Horizontal Line -->
    
    <section id="slideshow">	<!-- Slideshow Start -->
        <div class="html_carousel">
			<div id="slider">
				<div class="slide">
					<img src="images/tweets4science-banner.png" width="3000" height="783" alt="image 1"/><!-- Replace these images with your own but make sure they are 3000px wide and 783px high or the same ration -->
				</div><!--/slide-->
			</div><!--/slider-->
			<div class="clearfix"></div>
		</div><!--/html_carousel-->
    </section>	<!-- Slideshow End -->
    
    <aside id="message" class="wide2">
	<h3>

<!-------------------------------------------------------------->

<?php
include_once('userid.inc');
$allowedExts = array("zip");
$maxFileSize=20*1024*1024;
$extension = end(explode(".", $_FILES["file"]["name"]));
if (/*($_FILES["file"]["type"] == "application/zip") && */ ($_FILES["file"]["size"] < $maxFileSize) && in_array($extension, $allowedExts)){
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"];
    }
  else
    {
        $extensionKey = array_search($extension, $allowedExts);
      $userInfo = getUserFromTweetsZIP($_FILES["file"]["tmp_name"]);//md5(file_get_contents($_FILES["file"]["tmp_name"])).".".$allowedExts[$extensionKey];
      $newname = $userInfo[0].".".$allowedExts[$extensionKey];
    if (file_exists("upload/" . $newname))
      {
      echo "This file already exists.";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $newname);
      echo "Successfully stored. Thank you!";
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>

<!-------------------------------------------------------------->

</h3>
    </aside>

	<div class="clearfix"></div> <!-- Text Section End -->
	<hr>
	<section id="bottom" class="wide"> <!-- Last Words Section Start -->
    	<p><a href="http://liquidgem.birondesign.com/">Design based on Liquid Gem template by BironDesign</a></p>.
    </section><!-- Last Words Section End-->
</div>

<!-- SLIDESHOW SCRIPT START -->

<script type="text/javascript">
$("#slider").carouFredSel({
	responsive	: true,
	scroll		: {
		fx			: "crossfade",
		easing		: "swing",
		duration	: 1000,
		
	},
	items		: {
		visible		: 1,
		height		: "27%"
	}
});
</script>

<!-- SLIDESHOW SCRIPT END -->

</body>
</html>
<!-- Thanks for looking at Liquid Gem! I hope you find it useful :) -->
