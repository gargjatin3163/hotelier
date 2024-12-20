<!--Header Start-->
<?php
include"header.php";
?>
<!--Header End-->
        
        
         <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Our Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
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
        
<!-- Gallery -->
  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                    <h1 class="mb-5">Our <span class="text-primary text-uppercase">Bonefire Night</span></h1>
                </div>
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="img/p1.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="img/p2.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
	
	 <img
      src="img/p8.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="img/p4.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="img/p6.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
	
	<img
      src="img/p7.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="img/p5.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="img/p9.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
	
	 <img
      src="img/p3.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />
  </div>
</div>
<!-- Gallery -->

        <!-- Footer Start -->
        <?php
		include"footer.php";
		?>
		<!--Footer End-->