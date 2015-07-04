
<!-- Header -->
<div id="header-wrapper">
	<div class="container">
<?php $loggedin=0?><!-- change this to 0 if you are not logged in and 1 if logged in corresponds to the header file were the files can be accessed-->
<?php if ($loggedin){?>
        <link rel="stylesheet" href="pagecss/header.css" />
<?php }?>
		<!-- Header -->
			<header id="header">
				<div class="inner">

					<!-- Logo -->
						<h1><a href="index.php" id="logo">F-2 Foxes</a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li ><a href="index.php">Home</a></li>				
								<li><a href="about.php">About Us</a></li>
                                <li><a href="events.php">Events</a></li>
                                <li><a href="recruiting.php">Join F-2</a></li>
                                <?php if ($loggedin){?>
                                
                                <li><a href="grades.php">Grades</a></li>
                                <li><a href="signout.php">Sign Out</a></li>
                                <li><a href="training.php">Training</a></li>
                                <?php }?>
                                <li><a href="login.php">Log In</a></li>
                                <li><a href="signup.php">Sign Up</a></li>              
							</ul>
						</nav>

				</div>
			</header>
	</div>
</div>