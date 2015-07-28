<?php
include 'boot/session.php'; 

?>

<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Company I-1</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <link rel="stylesheet" href="home/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="home/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="home/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="home/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="home/nivo-slider.css" type="text/css" media="screen" />
	</head>
	<body class="homepage">
		<div id="page-wrapper">
            
            <!--header-->
            <?php include 'pagecontent/header.php'; ?>

            <?php include 'home/home.php'?>
			<!-- Footer  -->
            <?php include 'pagecontent/footer.php'; ?>
            <!--end of Footer-->
				
		</div>

		<!-- Scripts -->
        <?php include 'pagecontent/script.php'?>
        <script type="text/javascript" src="home/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="home/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	</body>
</html>
