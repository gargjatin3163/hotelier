<!--Header Start-->
<?php
session_start();
//include"mconn.php";
 
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
?>
 <!-- Header End -->
<!doctype html>
<html lang="en">

<head>
  <title>roombooking</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> </head>

<body class="h-screen font-sans login bg-cover">
<div class="container">
	 <h1 class="text-gray text-center font-bold">Room Booking</h1>
	 <br>
    <div class="leading-loose">
     <?php
	 	include"adminconn.php";
		
		$limit=10;
			
			if (isset($_GET['page']))
			{
				$page=$_GET['page'];
			}
			else
			{
				$page=1;
			}
			
			$offset=($page-1)*$limit;
			
			$a="SELECT * from roombook limit {$offset},{$limit}";
	 
	 $run=mysqli_query($connection,$a);
	 
	 $count=mysqli_num_rows($run);
	 
	 if($count>0)
	 {
		 
	 ?>
	
        	      <table class="table table-bordered table-hover ">
    <thead style="text:center">
      <tr>
        <th>Sno.</th>
        <th>User id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Checkin</th>
        <th>Checkout</th>
        <th>Adult</th>
        <th>Child</th>
        <th>Room Number</th>
        <th>Room</th>
        <th>Price</th>
        <th>Special Request</th>
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
        <td><?php echo $r['U_id']; ?></td>
        <td><?php echo $r['b_name']; ?></td>
        <td><?php echo $r['b_email']; ?></td>
        <td><?php echo $r['b_checkin']; ?></td>
        <td><?php echo $r['b_checkout']; ?></td>
        <td><?php echo $r['b_adult']; ?></td>
        <td><?php echo $r['b_child']; ?></td>
        <td><?php echo $r['room_no']; ?></td>
        <td><?php echo $r['b_room']; ?></td>
        <td><?php echo "Rs.".$r['b_price']; ?></td>
        <td><?php echo $r['b_spclrqst']; ?></td>
        
        
      </tr>
	  			<?php
				}
			?>
    </tbody>
  </table>	
<?php
				}
			?>
			<br><br>
			<?php
				include"adminconn.php";
				
				$b="SELECT * from roombook";
			
			    $run=mysqli_query($connection,$b);
				
				$c=mysqli_num_rows($run);
				
				if($c)
				{
					$total_records=mysqli_num_rows($run);
					
					$total_page=ceil($total_records/$limit);
					 
					 echo"<ul class='pagination justify-content-center'>";
					 
				?>
				
				<li class="page_item disabled">
				<a class="page-link" href="#" tabindex="-1">&laquo;</a>
				</li>
				
				<?php
				for ($i=1;$i<=$total_page;$i++)
				{
					echo"<li class='page-item'><a class='page-link' href='newsletter.php?page=$i'>$i</a></li>";
				}
				?>
				
				<li class="page_item ">
				<a class="page-link" href="#">&raquo;</a>
				</li>
				    </ul> 
                <?php
				}
                ?>				

    </div>
  </div>
</body>
</html>

