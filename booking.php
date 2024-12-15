<!--Header Start-->
<?php
session_start();
include "mconn.php";
 
if (!isset($_SESSION['U_id']))
{
	//header("location:login.php");
	
	echo"<script>
	alert('Login Firstly.');
	window.location.href='login.php';
	</script>";
}
else
{
	$uid=$_SESSION['U_id'];
	
include "header.php";
?>
<!-- Header End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
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


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Luxury Room</span></h1>
                </div>
                <div class="row g-5">
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

                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form method="post" id="myForm" action="paypal.php">
                                <div class="row g-3">
                                    <div class="col-md-6">	
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name"  name="usr" value="<?php echo $_SESSION['usr'];?>" placeholder="Your Name">
                                            <label for="name">Your Name</label>
											 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control"  id="email"   name="email" placeholder="Your Email" value="<?php echo $_SESSION['Email'];?>">
                                            <label for="email">Your Email</label>
                                        </div>
										
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkin"  name="checkin"  placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" required />
                                            <label for="checkin">Check In</label>
										  <div class="invalid-feedback" style="width: 100%;">
                                           Your checkin is required.
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkout"  name="checkout"  placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" required />
											<div class="invalid-feedback" style="width: 100%;">
                                           Your checkout is required.
                                          </div>
                                            <label for="checkout">Check Out</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1"   name="adult" >
                                              <option value="0">No adult</option>
                                              <option value="1">Adult 1</option>
                                              <option value="2">Adult 2</option>
                                              <option value="3">Adult 3</option>
                                            </select>
                                            <label for="select1">Select Adult</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select2"   name="child" >
                                              <option value="0">No Child</option>
                                              <option value="1">Child 1</option>
                                              <option value="2">Child 2</option>
                                              <option value="3">Child 3</option>
                                            </select>
                                            <label for="select2">Select Child</label>
                                          </div>
                                    </div>
									<?php 
									include "mconn.php";
									if(isset($_GET['id']))
									{
										$id= $_GET['id'];
										$a="SELECT * from addroom where sno='$id'";
										$run=mysqli_query($conn,$a);
									    $r=mysqli_fetch_array($run);
										
						            }
									?>
									<div class="col-12">
                                        <div class="form-floating">
                                           <input type="number" class="form-control" id="sno" name="sno" value="<?php echo $r['Sno'] ?>" placeholder="Room Number">
                                            <label for="Name">Room Number</label>
                                        </div>
										</div>
                                     <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="room" name="room" value="<?php echo $r['Type']; ?>" placeholder="Room Name">
                                            <label for="Name">Room Name</label>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="price"   name="price" value="<?php echo $r['Price'];?>" placeholder="Room Price">
                                            <label for="Price">Room Price</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Special Request" id="message"  name="rqst"  style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div>
                                    <input type="hidden" name="payment" value="<?php echo $r['Price']; ?>">
                                    <div class="col-12">
                                        
										<a href="" onclick="document.getElementById('myForm').submit(); return false;"><button class="btn btn-primary w-100 py-3"  name="bsub"  type="submit">Proceed to pay</button></a>
                                    </div>
                                </div>
								<?php
}
								/*include"mconn.php";
								
								if(isset($_POST['bsub']))
								{
									$name=$_POST['usr'];
									$email=$_POST['email'];
									$checkin=$_POST['checkin'];
									$checkout=$_POST['checkout'];
									$adult=$_POST['adult'];
									$child=$_POST['child'];
									$roomno=$_POST['sno'];
									$room=$_POST['room'];
									$price=$_POST['price'];
									$rqst=$_POST['rqst'];
									
									$a="INSERT into roombook(U_id, b_name, b_email, b_checkin, b_checkout, b_adult, b_child , room_no, b_room, b_price, b_spclrqst)
									VALUES ('$uid','$name', '$email','$checkin', '$checkout', '$adult', '$child','$roomno', '$room','$price', '$rqst')";
									
									$b=mysqli_query($conn,$a);
									
									if($b)
									{
										echo"<script>alert('Your booking is confirm....Thankyou.')</script>";
									}
									else
									{
										echo"<script>alert('sorry....Try again')</script>";
									}
								}
}	*/
								?>
									
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- Footer Start -->
        <?php
		include"footer.php";
		?>
		<!--Footer End-->