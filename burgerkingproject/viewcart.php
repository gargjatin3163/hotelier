<?php
session_start();
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
?>
<!--header start-->
<?php
include"header.php";
?>
<!--header end-->

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Your cart items</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">cart</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
		
		
		<!--cart start-->
		<div class="team">
            <div class="container">
                <div class="section-header text-center">
				<p>Cart Items</p>
                    <h2>Your cart is here..!!</h2>
                </div>
				
				<?php
				include"proconn.php";
				
				$a="SELECT * from cart where U_id='$uid'";
				
				  $total=0;
				
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
		<th>Quantity</th>
        <th>Total Price</th>
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
        <td><?php echo $i++ ?></td>
		
		<input type="hidden" class="pid" value="<?php echo $r['sno'];?>">
		
        <td><?php echo ucfirst($r['p_name']); ?></td>
		
        <td><img src="<?php echo 'img/'.$r['p_image']; ?>" style="height:100px;width:200px"></td>
		
        <td><?php echo "Rs." .$r['p_price']; ?></td>
		<input type="hidden" class="pprice" value="<?php echo $r['p_price'];?>">
		
      <td><input type="number" id="" value="<?php echo $r['quantity'];?>" class="w-50 text-center itemQty"></td>
	  
      <td><?php echo $r['total'];?></td>
	  
      <?php $total+=$r['total'];?>
	  
        <td><a class="btn btn-sm btn-danger rounded py-2 px-4" href="deletecart.php?id=<?php echo $r['sno']; ?>">Remove</a></td>
      </tr>
	  			<?php
				}
			?>

    </tbody>
  </table>
  <h3 class="text-right">Grand Total: <?php echo $total;?> </h3>
			<?php
				}
			?>
			  <hr class="mb-4">
        <a href="checkout.php?gt=<?php echo $total; ?>"><button class="btn btn-warning btn-md px-5 py-2 float-End" type="submit" >Continue to checkout</button></a>
			</div>
			</div>
			
			<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
  $(document).ready(function()
  {
     $('.itemQty').on('change',function()
	 {
            var $el = $(this).closest('tr');
            var pid= $el.find('.pid').val();
            var pprice= $el.find('.pprice').val();
            var qty= $el.find('.itemQty').val();
            //alert(pid+ " " + pprice + " " +qty);

            $.ajax
			({
                url:'quantity.php',
                type:'post',
                data:
				{
                    qy:qty,
                    get_id:pid,
                    p_price:pprice
                },
                success: function(data)
				{
                    if(data==1)
					{
                        //alert(data);
                        location.reload();
                    }
					else
					{
						alert(data);
					}
                }
            });
     });
  });


</script>
		<!--cart end-->
        
<!--footer start-->
<?php
include"footer.php";
?>
<!--footer end-->
