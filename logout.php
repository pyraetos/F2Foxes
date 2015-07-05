<?php 
 session_start();
session_destroy();
  ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>signout</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

            <!--header-->
            <?php include 'pagecontent/header.php'; ?>
            <div id="main-wrapper">
	             <div class="wrapper style2">
                     <?php
                    echo "<h1><a href='index.php'>You've been logged out.Click here to return to the home menu.</a></h1>";
                    ?>
                  </div>
            </div>
			<!-- Footer  -->
            <?php include 'pagecontent/footer.php'; ?>
				
		</div>

		<!--Script-- can be found in the pagecontent folder script.php-->
        <?php include 'pagecontent/script.php'?>

	</body>
</html>