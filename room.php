<!--Header Start-->
<?php
session_start();
include"header.php";
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
                            <li class="breadcrumb-item text-white active" aria-current="page">Rooms</li>
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
							
			$limit=15;
			
			if (isset($_GET['page']))
			{
				$page=$_GET['page'];
			}
			else
			{
				$page=1;
			}
			
			$offset=($page-1)*$limit;
			
			$a="SELECT * from addroom limit {$offset},{$limit}";
			
			$run=mysqli_query($conn,$a);
			
			$count=mysqli_num_rows($run);
			
			if($count>0)
			{
			?>
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>
                <div class="row g-4">
				<?php
				while($r=mysqli_fetch_array($run))
				{
				?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo 'img/'.$r['Image'];?>" style="height:200px;width:400px"alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo "Rs. ".$r['Price']."/night";?></small>
                            </div>
							<div>
								<a class='far fa-bookmark py-2 float-end px-3' href="savelater.php?id=<?php echo $r['Sno'];?>"  style='font-size:24px; color:black;'></a>
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
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $r['Bed']." Bed"; ?></small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $r['Bath']." Bath"; ?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3"><?php echo $r['Description']; ?></p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-3" href="single-room.php?id=<?php echo $r['Sno']; ?>">View Detail</a>
								    
                                    <a class="btn btn-sm btn-dark rounded py-2 px-3" href="booking.php?id=<?php echo $r['Sno']; ?>">Book Now</a>
                                </div>
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
				<br><br>
				<?php
				include"mconn.php";
				
				$b="SELECT * from addroom";
			
			    $run=mysqli_query($conn,$b);
				
				$c=mysqli_num_rows($run);
				
				if($c)
				{
					$total_records=mysqli_num_rows($run);
					
					$total_page=ceil($total_records/$limit);
					 
					 echo"<ul class='pagination justify-content-center'>";
					 
				?>
				
				<li class="page_item disabled">
				<a class="page-link" href="#" tabindex="-1">&laquo;</a>
				</li>
				
				<?php
				for ($i=1;$i<=$total_page;$i++)
				{
					echo"<li class='page-item'><a class='page-link' href='room.php?page=$i'>$i</a></li>";
				}
				?>
				
				<li class="page_item ">
				<a class="page-link" href="#">&raquo;</a>
				</li>
				    </ul> 
                <?php
				}
                ?>					
            </div>
        </div>
        <!-- Room End -->


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
        

        <!-- Footer Start -->
        <?php
		include"footer.php";
		?>
		<!--Footer End-->