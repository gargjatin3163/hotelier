<!--Header Start-->
<?php
session_start();
include"header.php";
?>
<!--Header End-->
        
        
        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
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
		
		
		
        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/aboutburger.jpeg" alt="Image">
                    
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <p>About Us</p>
                                <h2>Cooking Since 1954</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                   Founded in 1954, BURGER KING® is the second largest fast food hamburger chain in the world. The original HOME OF THE WHOPPER®, our commitment to premium ingredients, signature recipes, and family-friendly dining experiences is what has defined our brand for more than 50 successful years.
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


        <!-- Footer Start -->
        <?php
		include"footer.php";
		?>
		<!--Footer End-->