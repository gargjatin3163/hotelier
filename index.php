<!--Totalvisitor start-->
<?php
include"mconn.php";
$ip=$_SERVER['REMOTE_ADDR'];
$a="INSERT into totalvisitor(ip)
VALUES('$ip')";
$run=mysqli_query($conn,$a);
?>
<!--Totalvisitor end-->

<!--Header Start-->
<?php
session_start();
include"header.php";
?>
<!--Header End-->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
							
							
                            <div class="p-3" style="max-width: 700px;">

                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6>
                                <h3 class="display-3 text-white mb-4 animated slideInDown">Welcome to the Luxurious Living</h3>
                                <a href="room.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="room.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                            </div>
							
                        </div>
                    </div>
					
					<?php 
			include"mconn.php";
			
			$a="SELECT * from slider";
			
			$b=mysqli_query($conn,$a);
			
		    $c=mysqli_num_rows($b);
			
			if ($c>0)
			{
				
			?>
				<?php
				while($r=mysqli_fetch_array($b))
				{
			    ?>
                    <div class="carousel-item">
                        <img class="w-100" src="<?php echo 'img/'.$r['Image']; ?>" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
						
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6>
                                <h3 class="display-3 text-white mb-4 animated slideInDown"><?php echo $r['title']; ?></h3>
                                <a href="room.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="savelater.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                            </div>
                        </div>
		    </div>
							<?php
				}
			}
			?>
                
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h2 class="mb-4">Welcome to <span class="text-primary">Luxurious Living</span></h2>
                        <p class="mb-4">Welcome to Luxurious Living! We are excited to have you stay with us and hope you have a comfortable and enjoyable visit. We offer comfortable and clean accommodations that are perfect for business or leisure travel.</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
								<?php
								include"mconn.php";
								$x="SELECT * from addroom";
								
								$y=mysqli_query($conn,$x);
								
								$z=mysqli_num_rows($y);
								
								?>
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?php echo $z; ?></h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
								<?php
								include"mconn.php";
								$x="SELECT * from staff";
								
								$y=mysqli_query($conn,$x);
								
								$z=mysqli_num_rows($y);
								
								?>
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?php echo $z; ?></h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
								<?php
								include"mconn.php";
								$x="SELECT * from totalvisitor";
								
								$y=mysqli_query($conn,$x);
								
								$z=mysqli_num_rows($y);
								
								?>
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up"><?php echo $z; ?></h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/waterpool.jpeg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/hotel.jpeg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/balcony.jpeg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/mountain.jpeg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
				<?php
				//added product get in project
                include"mconn.php";
				
                $a="SELECT * from addroom order by rand() limit 3";

                $run=mysqli_query($conn,$a);

                $count=mysqli_num_rows($run);

                if($count>0)
                {
                
                ?>	
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>
                        <div class="room-item shadow rounded overflow-hidden">
					<div class="row g-4">
					<?php
					while($r=mysqli_fetch_array($run))
					{
					?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
				
                
				
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo 'img/'.$r['Image']; ?>" style="height:300px;" alt="Image">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo "Rs. ".$r['Price']."/night"; ?></small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $r['Type'];?></h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $r['Bed'] ." Bed";?></small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $r['Bath']." Bath";?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
								<div>
                               <p><?php echo $r['Description']; ?></p>
								</div>
                                <div class="d-flex justify-content-between">
                                   <a class="btn btn-sm btn-primary rounded py-2 px-3" href="single-room.php?id=<?php echo $r['Sno']; ?>">View Detail</a>
								    
                                    <a class="btn btn-sm btn-dark rounded py-2 px-3" href="booking.php?id=<?php echo $r['Sno']; ?>">Book Now</a>
                                </div>
                </div>
				
                        </div>
				<?php
				}
				 ?>
                            </div>
				
                    </div>
					<?php
				}
				    ?>
            </div>
        </div>
        <!-- Room End -->


  

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="room.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                     <i class="fa fa-hotel fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Rooms & Appartment</h5>
                            
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="burgerkingproject/index.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Food & Restaurant</h5>
                            
                        </a>
                    </div>
					 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="event.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Event & Party</h5>
                            
                        </a>
                    </div> 
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="bonefire.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-spa fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Bonefire & DJ Night</h5>
                            
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="pool.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-swimmer fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Poolparty</h5>
                           
                        </a>
                    </div>
                   
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="yoga.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-dumbbell fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">GYM & Yoga</h5>
                          
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


     <!-- Testimonial Start -->
        <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
            <div class="container">
			<?php
			include"mconn.php";
			
			$a="SELECT * from review";
			
			$run=mysqli_query($conn,$a);
			
			$count=mysqli_num_rows($run);
			
			if($count>0)
			{
			?>
                <div class="owl-carousel testimonial-carousel py-5">
				<?php
				while($r=mysqli_fetch_array($run))
				{
					?>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p><?php echo $r['r_review'];?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/reviewimage.png" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1"><?php echo $r['r_name']; ?></h6>
                                <small><?php echo $r['r_location'];?></small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
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
	<!--Testimonial End-->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
				<?php
				include"mconn.php";
				
				$a="SELECT * from staff order by rand() limit 4";
				
				$run=mysqli_query($conn,$a);
				
				$count=mysqli_num_rows($run);
				
				if ($count>0)
				{
				?>
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
                </div>
                <div class="row g-4">
				<?php
				while($r=mysqli_fetch_array($run))
				{
				?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo'img/'.$r['Image'];?>" style="height:300px; width:300px" alt="Image">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"><?php echo $r['Name'];?></h5>
                                <small><?php echo $r['Type'];?></small>
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
        

        <!-- Footer Start -->
        <?php
		include"footer.php";
		?>
		<!--Footer End-->