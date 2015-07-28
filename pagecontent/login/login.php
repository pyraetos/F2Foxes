
<!-- Main Wrapper -->
<div id="main-wrapper">
	<div class="wrapper style2">
		<div class="inner">
			<div class="container">
				<div id="content">
                    <?php
                    session_start();
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    if ($username && $password)
                    {
                        $connect=mysql_connect("localhost", "root","") or die ("Couldn't connect!");
                        mysql_select_db("f2foxes") or die("Couldn't find db");
                        $query=mysql_query("SELECT * FROM users WHERE username='$username' ");
                        $numrows=mysql_num_rows($query);
                        // echo "rows is $numrows"; this is a quick check to see if the username exists
                        if ($numrows!=0)
                        {
                            //code to login
                            while ($row=mysql_fetch_assoc ($query))
                            {
                                $dbusername=$row ['username'];
                                $dbpassword=$row ['password'];
                            }
                            //cehck to see if they match!
                            if($username==$dbusername&&md5($password)==$dbpassword)// password is stored as an md5
                            {
                                echo"You're in! <a href='index.php'>Click</a> here to enter";// edit this to change were the use goes after logingin
                                $_SESSION['username']=$dbusername;
               
                            }
                            else
                                echo "incorrect password";
                        }
                        else
                            echo("user does not exits");
       
                    }
                    else{
                        //echo("please enter a username and a password");
                    }
                    ?>
                        <!--Prevents Mobile Nav Bar From covering up content-->
                    <br></br>
                    <h1>Please Log In</h1>
                    <form action= "login.php" method="post">
                    <p>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="" maxlength="20" />
                    </p>
                    <p>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="" maxlength="20" />
                    </p>
                    <p>
                    <input type="submit" value="Login" />
                    </p>
                    </fieldset>
                    </form><p><a href="register.php">Not Registered? Click here.</a></p>

				</div>
			</div>
		</div>
	</div>>
</div>
