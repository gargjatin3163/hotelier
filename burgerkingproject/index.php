<!--Header start-->
<?php
session_start();
include"header.php";
?>
<!--Header end-->

        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
				
                    <div class="carousel-item">
					       <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
						
                        <div class="carousel-text">
						<?php
        if (isset($_SESSION['name']))
        {
	        echo"<h5 class='text-light'> <span class='text-warning'>Welcome </span>".$_SESSION['name']."</h5>";
        }
        ?>
                            <h1>Best <span>Quality</span> Ingredients</h1>
                            
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="menu.php">View Menu</a>
                                <a class="btn custom-btn" href="">Book Table</a>
                            </div>
                        </div>
						
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
						<?php
	
        if (isset($_SESSION['name']))
        {
	        echo"<h5 class='text-light'> <span class='text-warning'>Welcome </span>".$_SESSION['name']."</h5>";
        }
        ?>
                            <h1>World’s <span>Best</span> Chef</h1>
                            
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="menu.php">View Menu</a>
                                <a class="btn custom-btn" href="">Book Table</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
						<?php
		
        if (isset($_SESSION['name']))
        {
	        echo"<h5 class='text-light'> <span class='text-warning'>Welcome </span>".$_SESSION['name']."</h5>";
        }
        ?>
                            <h1>Fastest Order <span>Delivery</span></h1>
                            
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="menu.php">View Menu</a>
                                <a class="btn custom-btn" href="">Book Table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        
        


        <!-- About Start -->
        <div class="about">
            <div class="container">
			<div class="section-header text-center">
                   <p>About Us</p>
                                <h2>Cooking Since 1954</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/aboutburger.jpeg" height="450px" width="50px" alt="Image">
                            
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
							
                            <div class="about-text">
                                <p>
                                   Founded in 1954, BURGER KING® is the second largest fast food hamburger chain in the world. The original HOME OF THE WHOPPER, our commitment to premium ingredients, signature recipes, and family-friendly dining experiences is what has defined our brand for more than 50 successful years.
                                </p>
                                <p>
                                    Burger King Corporation, restaurant company specializing in flame-broiled fast-food hamburgers. It is the second largest hamburger chain in the United States, after McDonald's, and one of the most successful brands in fast-food history.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        
        
        
        
        
        <!-- Food Start -->
        <div class="food">
            <div class="container">
                <div class="row align-items-center">
				    <?php
					include"proconn.php";
					$a="SELECT * from foodproduct group by Category";
					$run=mysqli_query($projectconn,$a);
					if(mysqli_num_rows($run))
					{
						while($r=mysqli_fetch_array($run))
						{
					?>
						<div class="col-md-4">
					    <div class="food-item">
                        <i class="flaticon-burger"></i>
                        <a href="menu.php?cat=<?php echo $r['Category'];?>">
						<h2><?php echo $r['Category']; ?></h2></a>
                            
                             <a href="menu.php?cat=<?php echo $r['Category'];?>">View <?php echo $r['Category'];?></a>
                        </div>
                        </div>
						<?php 
						}
					}
					?>
                    </div>
                </div>
            </div>
        <!-- Food End -->
        
        
        <!-- Menu Start -->
        <div class="team">
            <div class="container">
			
				<?php
			$a="SELECT * from foodproduct order by rand() limit 4";

                $run=mysqli_query($projectconn,$a);

                $count=mysqli_num_rows($run);

                if($count>0)
                {
                
                ?>
                <div class="section-header text-center">
                    <p>Our Menu</p>
                    <h2>Our delicious menu</h2>
                </div>
                <div class="row">
					<?php 
					while($r=mysqli_fetch_array($run))
					{
					?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                               <img src="<?php echo 'img/'.$r['Image']; ?>"  alt="Image" style="height:300px; width:300px;">

                                
                            </div>
                            <div class="team-text">
                                 <a href="single.php?id=<?php echo $r['sno']; ?>"> <h2><?php echo UCfirst($r['Name']);?></h2></a>
                                 <p style="color:brown; font-size:large"><?php echo "Rs." .$r['Price'];?></p>
                            </div>
                        </div>
                    </div>
                    
			<?php
					}
				}
				?>
            </div>
        </div>
        </div>
     
        <!-- Menu End -->
        
        
         <!-- Team Start -->
        <div class="team">
            <div class="container">
			<?php
			include"proconn.php";
			
			$a="SELECT * from chef order by rand() limit 4";
			
			$run=mysqli_query($projectconn,$a);
			
			$count=mysqli_num_rows($run);
			
			if($count>0)
			{
			?>
                <div class="section-header text-center">
                    <p>Our Team</p>
                    <h2>Our Master Chef</h2>
                </div>
                <div class="row">
				<?php
				while($r=mysqli_fetch_array($run))
				{
				?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo 'img/'.$r['Image'];?>" style="height:300px;width:250px" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2><?php echo $r['Name']; ?></h2>
                                <p><?php echo $r['Work']; ?></p>
                            </div>
                        </div>
                    </div>
					<?php
				}
		            ?>
                </div>
				<?php
				}
		            ?>
            </div>
        </div>
        <!-- Team End -->

        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
			<?php 
			include"proconn.php";
			
			$a="SELECT * from review";
			
			$b=mysqli_query($projectconn,$a);
			
		    $c=mysqli_num_rows($b);
			
			if ($c>0)
			{
				
			?>
                <div class="owl-carousel testimonials-carousel">
				<?php
				while($r=mysqli_fetch_array($b))
				{
			    ?>
                    <div class="testimonial-item">
                       
                        <p>
                            
							<?php echo $r['r_review']; ?>
                        </p>
                        <h2><?php echo $r['r_name']; ?></h2>
                        <h3><?php echo $r['r_location']; ?></h3>
                    </div>
					<?php
				}
			}
			?>
                   
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Contact Us</p>
                    <h2>Contact For Any Query</h2>
                </div>
                <div class="row align-items-center contact-information">
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Address</h3>
                                <p>1, Punjab High Street Restaurant Rajkamal Square, Bhupindra Rd, Punjabi Bagh, Patiala, Punjab 147001</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call Us</h3>
                                <p>+91 98744-64176<br>+91 87648-75444</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email Us</h3>
                                <p>burgerking@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-share"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Follow Us</h3>
                                <div class="contact-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact-form">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1600663868074!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div id="success"></div>
                        <form novalidate="novalidate" method="post">
                            <div class="control-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" name="subj" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" name="msg" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn custom-btn" type="submit" name="sub1">Send Message</button>
                            </div>
                        </form>
						<?php
						include"proconn.php";
						if (isset ($_POST['sub1']))
						{
							$name=$_POST['name'];
							$email=$_POST['email'];
						    $subject=$_POST['subj'];
							$message=$_POST['msg'];
						
						$a="INSERT into query(name, email, subject, message)
						VALUES('$name', '$email', '$subject', '$message')";
						
						$run=mysqli_query($projectconn,$a);
						
						if($run)
						{
							echo"<script>alert('Your message has been sent.');</script>";
						}
						}
						?>
						
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
		
		<!--Footer start-->
		<?php
		include"footer.php";
		?>
		<!--Footer end-->