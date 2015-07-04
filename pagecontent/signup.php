<!-- Main Wrapper -->
<div id="main-wrapper">
	<div class="wrapper style2">
		<div class="inner">
			<div class="container">
				<div id="content">
                        <!--Prevents Mobile Nav Bar From covering up content-->
                    <br></br>
                    <h1>Wellcome to the Fox Company Website If you could please fill out the form and hit submit when you are done</h1>
                    <form action= "login_submit.php" method="get"><!--method will have to be changed to post later on when we have a database set up-->
                    <!--first name--><p>
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" value="" maxlength="15" />
                        </p>
                    <!--Last name--> <p>
                        <label for="last">Last Name</label>
                        <input type="text" id="fname" name="fname" value="" maxlength="15" />
                        </p>
                     <!--Status-->
                        <p>
                        <label for="status">What is your classification?</label>
                            <span>
                                <input type="radio" name="status" value="Student">Student
                            </span>
                            <span>
                                <input type="radio" name="status" value="Parent">Parent
                            </span>
                            <span>
                                <input type="radio" name="status" value="OldFox">Old Fox
                            </span>
                            <span>
                                <input type="radio" name="status" value="Prospect">Prospect (a person wanting to join the corps)
                            </span>
                        </p>
                     <!--Email--><p>
                        <label for="email">Current email</label>
                        <input type="text" id="email" name="email" value="" maxlength="30" />
                        </p>
                     <!--Phone--><p>
                        <label for="phone">phone number we can reach you at(please enter in 122-232-3232 format)</label>
                        <input type="text" id="phone" name="phone" value="" maxlength="10" />
                        </p>
                     <!--State--><p>
                        <label for="state">state of residence</label>
                        <input type="text" id="state" name="state" value="" maxlength="20" />
                        </p>
                     <!--username--><p>
                        <label for="user">username you would like</label>
                        <input type="text" id="user" name="user" value="" maxlength="15" />
                        </p>
                        <p>
                     <!--Password--><p>
                        <label for="pass">password you would like</label>
                        <input type="password" id="pass" name="pass" value="" maxlength="15" />
                        </p>
                        <p>
                        <label for="passcheck">please enter your password again</label>
                        <input type="password" id="passcheck" name="passcheck" value="" maxlength="15" />
                        </p>
                    <p>
                    <input type="submit" value="Login" />
                    </p>
                    </fieldset>
                    </form>

				</div>
			</div>
		</div>
	</div>>
</div>
