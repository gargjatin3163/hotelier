<!--Header start-->
<?php
include"header.php";
?>
<!--Header end-->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Sign Up</h2>
                </div>

                <div class="row contact-form">
                    <div class="col-md-8">
                        <div id="success"></div>
                        <form method="post">
                            <div class="control-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control" name="pass" id="password" placeholder="Your Password" required="required" data-validation-required-message="Please enter a Password" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn custom-btn" type="submit" name="sub">Sign up</button>
								<br><br>
							<p>You already have an account?<a href="login.php"><u>Click Here</u></a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
		<?php
		include"proconn.php";
		echo"<br><br>";
		
		if(isset ($_POST['sub']))
		{
            $name=$_POST['name'];			
            $email=$_POST['email'];			
            $password=$_POST['pass'];
			
        $a="INSERT INTO signup(Name,Email,Password)		
		values('$name','$email','$password')";
		
		$run=mysqli_query($projectconn,$a);
		
		if ($run)
		{
			echo"<script>
	                                alert('Thankyou for signup.');
	                                window.location.href='login.php';
	                                </script>";
		}
		else
		{
			echo"<script>
	                                alert('Something went wrong.');
	                                window.location.href='signup.php';
	                                </script>";
		}
		}
		?>
        <!-- Contact End -->


        <!-- Footer Start -->
        <?php
		include"footer.php";
		?>
		<!--Footer end-->
		
