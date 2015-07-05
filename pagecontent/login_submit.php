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
                                   echo"You're in! <a href='index.php'>Click</a> here to enter";
                                   $_SESSION['username']=$dbusername;
               
                               }
                               else
                                    echo "incorrect password";
                           }
                           else
                               echo("user does not exits");
       
                        }
                        else{
                            echo("please enter a username and a password");
                        }
                    ?>
                </div>
			</div>
		</div>
	</div>
</div>