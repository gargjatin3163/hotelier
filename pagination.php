<?php 
$limit=12;
if(isset($_GET['page'])){
	
	$page=$_GET['page'];
   
}
else{
   
	$page=1;
	
}
$offset=($page-1)*$limit;
?>
<?php

include "header.php";


?>
        <!-- end of header -->
        <!-- start of breadcumb-section -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <ul>
                                <li><a href="index.html">Home </a></li>
                                <li><span>Product Page</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of wpo-breadcumb-section-->

        <!-- start wpo-shop-page -->
        <section class="wpo-shop-page section-padding">
            <h2 class="hidden">some</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-lg-2">
                        <!-- start wpo-product-section -->
                        <section class="wpo-product-section">
                            <div class="sorting-section">
                                <ul>
                                    <li>Showing 1–10 of 32 results</li>
                                    <li>
                                        <select name="sorting" id="sorting" class="select">
                                            <option value="menu_order" selected="selected">Default Sorting</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                            <div class="wpo-product-wrap">
                                <div class="row">
								<?php
								
							if(isset($_GET['cat']))
							{

								$cat=$_GET['cat'];
								include"wedconn.php";
								$x="SELECT * from products  where category='$cat' limit {$offset},{$limit}";
								$y=mysqli_query($conn,$x);
								$c=mysqli_num_rows($y);
								if($c>0){
									while($r=mysqli_fetch_array($y)){
										?>
								
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="wpo-product-item">
                                            <div class="wpo-product-img">
                                               <img src="<?php echo 'assets/images/wed-img/'.$r['img'];?>" style="height:300px ;width:300px">
											   
											  
											   
                                                <a href="singleshop2.php?id=<?php echo $r['sno'];?>">Details</a>
                                            </div>
                                            <div class="wpo-product-text">
                                                
												<h3><?php echo $r['category'];?></h3>
										<span><h3><?php echo $r['price'];?></h3></span>
                                                
                                            </div>
                                        </div>
                                    </div>
									<?php
							}}}
								?>
								<?php
								if(!isset($_GET['cat'])){
								include "wedconn.php";
								
								$x="SELECT *from products limit {$offset},{$limit}";
								$y=mysqli_query($conn,$x);
								$c=mysqli_num_rows($y);
								if($c>0){
									while($r=mysqli_fetch_array($y)){
										?>
								
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="wpo-product-item">
                                            <div class="wpo-product-img">
                                               <img src="<?php echo 'assets/images/wed-img/'.$r['img'];?>" style="height:300px ;width:300px">
                                               <a href="singleshop2.php?id=<?php echo $r['sno'];?>">Details</a>
                                            </div>
                                            <div class="wpo-product-text">
                                                
												<h3><?php echo $r['category'];?></h3>
										<span><h3><?php echo $r['price'];?></h3></span>
                                                
                                            </div>
                                        </div>
                                    </div>
									<?php
							}}}
								?>
                                
                                </div>
                            </div>
                            <div class="pagination-wrapper pagination-wrapper-center">
							<?php
							if(isset($_GET['cat'])){
								$cat=$_GET['cat'];
							include "wedconn.php";
							$x1="SELECT* from products where category ='$cat'";
							$y1=mysqli_query($conn,$x1);
							if(mysqli_num_rows($y1)>0){
								$total_records=mysqli_num_rows($y1);
								$total_page=ceil($total_records/$limit);
                                echo"<ul class='pg-pagination'>";
								?>
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="fi ti-angle-left"></i>
                                        </a>
                                    </li>
									<?php
									for($i=1;$i<=$total_page;$i++){
										echo"<li class='page-item'><a class='page-link' href='shop.php?page=$i&cat=$cat'>$i</a></li>";
									}
									
                                    ?>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="fi ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
								<?php
							}}
							?>
							<?php
							include"wedconn.php";
							if(!isset ($_GET['cat']))
							{
                                
								//$cat=$_GET['cat'];
							$x1="SELECT* from products ";
							$y1=mysqli_query($conn,$x1);
							if(mysqli_num_rows($y1)){
								$total_records=mysqli_num_rows($y1);
								$total_page=ceil($total_records/$limit);
                                echo"<ul class='pg-pagination'>";
								?>
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="fi ti-angle-left"></i>
                                        </a>
                                    </li>
									<?php
									for($i=1;$i<=$total_page;$i++){
										echo"<li class='page-item'><a class='page-link' href='shop.php?page=$i'>$i</a></li>";
									}
									
                                    ?>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="fi ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
								<?php
							}}
							?>
							
                            </div>
                        </section>
                        <!-- end wpo-product-section -->
                    </div>
                    <div class="col-lg-3 col-md-8 order-lg-1">
                        <div class="wpo-shop-sidebar">
                            <div class="widget widget_search">
                                <div class="search-widget">
                                    <form class="searchform">
                                        <div>
                                            <input type="text" placeholder="Search...">
                                            <button type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget woocommerce widget_product_categories">
                                <h3>Filter by categories</h3>
								 <ul class="product-categories">
								 <?php
								 include"wedconn.php";
								 $a="SELECT * from products group by category";
								 $b=mysqli_query($conn,$a);
								 if(mysqli_num_rows($b))
								 {
									 while($r=mysqli_fetch_array($b))
									 {
                                    echo"<li class='cat-item'>
                                        <a href=shop.php?cat=$r[1]>$r[1]</a>
                                    </li>";
									?>
									<?php
								 }}
								 ?>

                                   <!-- <li class="cat-item">
                                        <a href="#">Wedding flowers</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">Invitation & Gifts</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">Wedding Jewlery</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">Wedding gown</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="#">Makeup</a>
                                    </li>-->
                                </ul>
							
								
                            </div>
                           
                            <div class="widget wpo-instagram-widget">
                                <div class="widget-title">
                                    <h3>Portfolio</h3>
                                </div>
                                <ul class="d-flex">
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/1.jpg"
                                                alt=""></a></li>
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/2.jpg"
                                                alt=""></a></li>
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/3.jpg"
                                                alt=""></a></li>
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/4.jpg"
                                                alt=""></a></li>
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/5.jpg"
                                                alt=""></a></li>
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/6.jpg"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end wpo-shop-page -->

        <!-- start of wpo-site-footer-section -->
        <?php
		include "footer.php";
		?>