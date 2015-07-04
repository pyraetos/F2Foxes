<?php
    $connection = new mysqli("localhost","user","password") or die("Couldn't connect to database");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>log in</title>
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

            <!--Main Content-- link to about.php it is located in the pagecontent folder-->
            <?php include 'pagecontent/login.php'?>
            
			<!-- Footer  -->
            <?php include 'pagecontent/footer.php'; ?>
				
		</div>

		<!--Script-- can be found in the pagecontent folder script.php-->
        <?php include 'pagecontent/script'?>

	</body>
</html>