<!--header start-->
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
                        <h2>Your favourite items</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Favourite</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
		
		
		<!--cart start-->
		<div class="team">
            <div class="container">
                <div class="section-header text-center">
				<p>Favourite Items</p>
                    <h2>Your favourite is here..!!</h2>
                </div>
				<?php
				
include"proconn.php";
if(!isset($_SESSION['U_id']))
{
	echo"<script>
	alert('You have to login first.');
	window.location.href='login.php';
	</script>";
}
else
{
	$uid=$_SESSION['U_id'];
}
				
				
				include"proconn.php";
				
				$a="SELECT * from fav where U_id='$uid'";
				
				$run=mysqli_query($projectconn,$a);
				
				$count=mysqli_num_rows($run);
				
				if($count>0)
				{
?>
		      <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Cart</th>
        <th>Cancel</th>
      </tr>
    </thead>
    <tbody>
	<?php
	$i=1;
		while($r=mysqli_fetch_array($run))
		{
	?>
      <tr>
	  <td><?php echo $i++; ?></td>
        <td><?php echo $r['p_name']; ?></td>
        <td><img src="<?php echo 'img/'.$r['p_image']; ?>" style="height:100px;width:200px"></td>
        <td><?php echo "Rs." .$r['p_price']; ?></td>
        <td><a class="btn btn-sm btn-warning rounded py-2 px-4" href="cart.php?pid=<?php echo $r['sno']; ?>">Add to Cart</a></td>
        <td><a class="btn btn-sm btn-danger rounded py-2 px-4" href="deletefav.php?id=<?php echo $r['sno']; ?>">Remove</a></td>
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
			<?php
		include"proconn.php";
		
		if (isset($_GET['id']))
			{
				$id=$_GET['id'];
		
		$a="DELETE from fav where p_id='$id'";
		
		$run=mysqli_query($projectconn,$a);
		
		if($run)
		{
			//echo"<script>item remove successfully</script>";
		}
		else
		{
			echo"Something went wrong";
		}
			}
		?>
			
		<!--cart end-->
        
<!--footer start-->
<?php
include"footer.php";
?>
<!--footer end-->