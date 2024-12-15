<!--header start-->
<?php
session_start();
  
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
}
include"header.php";
?>
<!--header end-->

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
		
		<!-- Booking Start-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Your <span class="text-primary text-uppercase">Bookings</span></h1>
                </div>
				
			    <?php
				include"mconn.php";
				
				$a="SELECT * from roombook where U_id='$uid' order by sno desc";
				
				$run=mysqli_query($conn,$a);
				
				$count=mysqli_num_rows($run);
				
				if($count>0)
				{
                ?>
				
		      <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Checkin</th>
        <th>Checkout</th>
        <th>Adult</th>
        <th>Child</th>
        <th>Room number</th>
        <th>Room</th>
        <th>Price</th>
      </tr>
	  </thead>
	  <tbody>
	<?php
	$i=1;
		while($r=mysqli_fetch_array($run))
		{
	?>
      <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $r['b_name']; ?></td>
        <td><?php echo $r['b_email']; ?></td>
        <td><?php echo $r['b_checkin']; ?></td>
        <td><?php echo $r['b_checkout']; ?></td>
        <td><?php echo $r['b_adult']; ?></td>
        <td><?php echo $r['b_child']; ?></td>
        <td><?php echo $r['room_no' ]; ?></td>
        <td><?php echo $r['b_room']; ?></td>
        <td><?php echo $r['b_price']; ?></td>
	
      </tr>
	  <?php
   	  }
	  ?>

     </tbody>
	 </table>
	  <?php
	  }
	  ?>

	  </div>
	  </div>
		<!--Booking End-->

<!--Footer start-->
<?php
include"footer.php";
?>
<!--Footer end-->