<!--Header Start-->
<?php
session_start();
include"header.php";
?>
<!--Header End-->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Master Chef</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Chef</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- Team Start -->
        <div class="team">
            <div class="container">
			<?php
			include"proconn.php";
			
			$a="SELECT * from chef";
			
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


        <!-- Footer Start -->
        <?php
		include"footer.php";
		?>
		<!--Footer End-->