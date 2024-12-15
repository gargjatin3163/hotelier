<!--Header start-->
<?php
session_start();
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
        
		<?php
		include"proconn.php";
		echo"<br><br>";
		
		if (isset($_POST['sub']))
		{
			$email=$_POST['email'];
			$password=$_POST['pass'];
			
		$a="SELECT * from signup where Email='$email' and Password='$password'";
		
		$run=mysqli_query($projectconn,$a);
		
		$count=mysqli_num_rows($run);
		
		if($count>0)
		{
			while($r=mysqli_fetch_array($run))
			{
				$_SESSION['name']=$r['Name'];
				$_SESSION['U_id']=$r['Sno'];
				//echo $_SESSION['name'];
				header("location:index.php");
			}
		}
		}
		?>
		
		
		<div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Login</h2>
                </div>

                <div class="row contact-form">
                    <div class="col-md-8">
                        <div id="success"></div>
                        <form method="post">
                            <div class="control-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control" name="pass" id="password" placeholder="Your Password" required="required" data-validation-required-message="Please enter a Password" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
							<button class="btn custom-btn" type="submit" name="sub"> login</button>
							<br><br>
							<p>Create new account?<a href="signup.php"><u>Click Here</u></a></p>
                            </div>
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
		
        <!-- Contact End -->


        <!-- Footer Start -->
        <?php
		include"footer.php";
		?>
		<!--Footer end-->
		
