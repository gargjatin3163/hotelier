<?php
include"header.php";
?>

<!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Blog Detail</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Detail</a>
                    </div>
                </div>
            </div>
        </div>
		
        <!-- Page Header End -->
		        <div class="single">
            <div class="container">
			<?php
			include"proconn.php";
			
			if (isset($_GET['id']))
			{
				$id=$_GET['id'];
				
				$a="SELECT * from foodproduct where sno='$id'";
				
				$run=mysqli_query($projectconn,$a);
				
				$count=mysqli_num_rows($run);
				
				if($count>0)
				{
				$r=mysqli_fetch_array($run);
			   
			?>
                <div class="row">
				
                    <div class="col-lg-8">
                        <div class="single-content">
                            <img src="<?php echo 'img/'.$r['Image'];?>" style="height:400px;width:100%" />
							</div>
							</div>
							<div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <div class="search-widget">
                                    <form>
                                        <input class="form-control" type="text" placeholder="Search Keyword">
                                        <button class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                </div>
                                </div>
								<div class="sidebar-widget">
                                <h1 class="widget-title"><b><?php echo UCfirst($r['Name']); ?></b></h1>
								  <h3><?php echo "Rs.".$r['Price'];?></h3>
                                <div class="text-widget">
                                    
                                       <p style="font-size:20px"><?php echo UCfirst($r['Description']);?></p>
                                    
                                </div>
								<a href="cart.php?pid=<?php echo $r['sno']; ?>"><button class="btn btn-outline-warning py-2 px-3">
								Add to Cart</button></a>
								
                            </div>	
                            </div>
							</div>
				<?php
				}
			}
		        ?>
							</div>
							</div>
							
							
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
<?php
include"footer.php";
?>