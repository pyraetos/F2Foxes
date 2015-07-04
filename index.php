<?php

?>

<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>F-2 Foxes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        
	</head>
	<body class="homepage">
		<div id="page-wrapper">
            <!--header is located in pagecontet folder-->
            <?php include 'pagecontent/header.php'; ?>
			
             <!--Main Content-- link to about.php it is located in the pagecontent folder-->
            <?php include 'pagecontent/home.php'?>

			<!-- Footer  -->
            <?php include 'pagecontent/footer.php'; ?>
            <!--end of Footer-->
				
		</div>

		<!--Script-- can be found in the pagecontent folder script.php-->
        <?php include 'pagecontent/script'?>

	</body>
</html>