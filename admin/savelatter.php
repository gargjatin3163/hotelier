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
  <title>savelater</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> </head>

<body class="h-screen font-sans login bg-cover">
<div class="container">
	 <h1 class="text-gray text-center font-bold">Save later</h1>
	 <br>
    <div class="leading-loose">
     <?php
	 	include"adminconn.php";
		
		$limit=8;
			
			if (isset($_GET['page']))
			{
				$page=$_GET['page'];
			}
			else
			{
				$page=1;
			}
			
			$offset=($page-1)*$limit;
			
			$a="SELECT * from savelater limit {$offset},{$limit}";
	 
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
        <th>Room number</th>
        <th>Room Name</th>
        <th>Bed</th>
        <th>Bath</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
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
        <td><?php echo $r['id']; ?></td>
        <td><?php echo $r['Type']; ?></td>
        <td><?php echo $r['Bed']; ?></td>
        <td><?php echo $r['Bath']; ?></td>
        <td><?php echo $r['Description']; ?></td>
        <td><?php echo "Rs.".$r['Price']; ?></td>
        <td><img src="<?php echo '../img/'.$r['Image']; ?>" style="height:200px;width:270px"></td> 
        
        
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
				
				$b="SELECT * from savelater";
			
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

