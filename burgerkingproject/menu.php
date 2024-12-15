<!--Header start-->
<?php
session_start();
include"header.php";
?>
<!--header end-->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Menu</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Menu</p>
                    <h2>Our delicious menu is here..!!</h2>
                </div>
				
				
		<!--Search Bar Start-->
    <div class="col-lg-2">
				<td id="table-form">
        <form id="search-form">
     
          <div id="autocomplete">
            <input type="text" id="city-box" placeholder="Search" autocomplete="off">
            <div id="cityList"></div>
          </div>
          
        </form>
         
      </td>
    </tr>
    <tr>
      <td id="table-data"></td>
    </tr>
    </div>
<!-- Script Block Start -->
    
<script type="text/javascript" src="./searchbar/js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    // Autocomplete Textbox
    $("#city-box").keyup(function(){
      var pname = $(this).val();

      if(pname != ''){
         $.ajax({
            url: "load-product.php",
            method: "POST",
            data: { pname: pname},
            success: function(data){
              console.log(data);
              $("#cityList").fadeIn("fast").html(data);
            }
         }); 
      }else{
        $("#cityList").fadeOut();
        $("#table-data").html("");
      }
    });

    // Autocomplete List Click Code
    $(document).on('click','#cityList li',function(){
      $('#city-box').val($(this).text());
      $("#cityList").fadeOut();
    });

    // Search Button Code
    $("#search-btn").on('click', function(e){
      e.preventDefault();

      var pname = $('#city-box').val();

      if(pname == ""){
        alert("Please enter the city Name.");
        $(".row").html("");
      }else{
        $.ajax({
            url: "load-table.php",
            method: "POST",
            data: { pname: pname},
            success: function(data){
				//alert(data);
              $(".prod,.sear").html(data);
            }
         }); 
      }
    })
  });
</script>
<!--Search Bar End-->
			
				<div class="menu-tab">
                     <ul class="nav nav-pills justify-content-center">
					  <?php
					include "proconn.php";
					$x="SELECT * from foodproduct group by Category";
					$y=mysqli_query($projectconn,$x);
					if(mysqli_num_rows($y))
					{
						while($row=mysqli_fetch_array($y))
						{
						
                       echo "<li class='nav-item'>
                            <a class='nav-link text-dark'
						 href=menu.php?cat=$row[4]>$row[4]</a>
                        </li>";
						?>
					<?php }
					echo "&nbsp;&nbsp;";
					}	?>
					
                       
                    </ul>
			<br>	
			<br>	
			<br>	
                <div class="row">
				<div class="col-lg-2">
				
				</div>
				
				<?php
				//added product get in project
                include"proconn.php";
				if (isset($_GET['cat']))
				{
					$cat=$_GET['cat'];
					
                $a="SELECT * from foodproduct where Category='$cat'";

                $run=mysqli_query($projectconn,$a);

                $count=mysqli_num_rows($run);

                if($count>0)
                {
                
                ?>
					<?php 
					while($r=mysqli_fetch_array($run))
					{
					?>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo 'img/'.$r['Image']; ?>"  alt="Image" style="height:300px; width:300px;">
                                <div class="team-social">
                                    <a href="cart.php?pid=<?php echo $r['sno']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="fav.php?pid=<?php echo $r['sno']; ?>"><i class="fa fa-heart"></i></a>
                      
                                </div>
                            </div>
                            <div class="team-text">
                               <a href="single.php?id=<?php echo $r['sno']; ?>"> <h2><?php echo UCfirst($r['Name']);?></h2></a>
								<p style="color:brown; font-size:large"><?php echo "Rs." .$r['Price'];?></p>
                            </div>
                        </div>
                    </div>
						<?php
					}
						?>
					<?php
				}}
				?>
				
				
				<?php
				//added product get in project
                include"proconn.php";
				if (!isset($_GET['cat']))
				{
					//$cat=$_GET['cat'];
					
                $a="SELECT * from foodproduct";

                $run=mysqli_query($projectconn,$a);

                $count=mysqli_num_rows($run);

                if($count>0)
                {
                
                ?>
					<?php 
					while($r=mysqli_fetch_array($run))
					{
					?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo 'img/'.$r['Image']; ?>"  alt="Image" style="height:300px; width:300px;">
                                <div class="team-social">
                                    <a href="cart.php?pid=<?php echo $r['sno']; ?>"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="fav.php?pid=<?php echo $r['sno']; ?>"><i class="fa fa-heart"></i></a>
                      
                                </div>
                            </div>
                            <div class="team-text">
                               <a href="single.php?id=<?php echo $r['sno']; ?>"> <h2><?php echo UCfirst($r['Name']);?></h2></a>
								<p style="color:brown; font-size:large"><?php echo "Rs." .$r['Price'];?></p>
                            </div>
                        </div>
                    </div>
						<?php
					}
						?>
					<?php
				}}
				?>
                    </div>
					
                </div>
				</div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
		<?php
		include"footer.php";
		?>
        <!--footer end-->