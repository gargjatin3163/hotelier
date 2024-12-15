<?php 
session_start();
include "header.php";
?>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Rooms</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Room</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


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


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
			<?php
			include"mconn.php";
			
			if (isset($_GET['id']))
			{
				$id=$_GET['id'];
				
				$a="SELECT * from addroom where Sno='$id'";
				
				$run=mysqli_query($conn,$a);
				
				$count=mysqli_num_rows($run);
				
				if($count>0)
				{
				$r=mysqli_fetch_array($run);
			   
			?>
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Room</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Room</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?php echo 'img/'.$r['Image'];?>" style="height:700px;width:100%" alt="image">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo "Rs.".$r['Price']."/night";?></small>
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
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $r['Bed']." Bed";?></small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $r['Bath']." Bath";?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3"><?php echo $r['Description'];?></p>
                                <div class="d-flex justify-content-between">
                                   
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="booking.php?id=<?php echo $r['Sno']; ?>">Book Now</a>
                                </div>
                            </div>
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
        <!-- Room End -->


        <!-- Testimonial Start -->
        <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
            <div class="container">
			<?php
			include"mconn.php";
			
			$a="SELECT * from review where r_id='$id'";
			
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

<!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5"><span class="text-primary text-uppercase">Drop </span>Your Reviews</h1>
                </div>
                <div class="row g-4">
                    
                    
                    <div class="col-md-12">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form method='post'>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="usr" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="Your location" name="loc" placeholder="Subject">
                                            <label for="subject">Your Location</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a Review here" id="message" name="review" style="height: 150px"></textarea>
                                            <label for="message">Leave Your Reviews Here</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name="sub" type="submit">Send Review</button>
                                    </div>
                                </div>
                            </form>
							<?php
							include'mconn.php';
							
							if(isset($_POST['sub']))
							{
								$name=$_POST['usr'];
								$email=$_POST['email'];
								$location=$_POST['loc'];
								$review=$_POST['review'];
								
								$a="INSERT into review(r_id,r_name,r_email,r_location,r_review)
								VALUES('$id','$name','$email','$location','$review')";
								
								$run=mysqli_query($conn,$a);
								
								if ($run)
								{
									echo"<script>alert('Thankyou for your response.')</script>";
								}
								else
								{
									echo "sorry..try again";
								}
							}
							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <?php
		include"footer.php";
		?>
		<!--Footer End-->