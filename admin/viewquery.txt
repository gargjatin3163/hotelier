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
  <title>staff</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> </head>

<body class="h-screen font-sans login bg-cover">
<div class="container">
	 <h1 class="text-gray text-center font-bold">Staff</h1>
	 <br>
    <div class="leading-loose">
     <?php
	 include"adminconn.php";
			
	$a="SELECT * from slider";

	 $run=mysqli_query($connection,$a);
	 
	 $count=mysqli_num_rows($run);
	 
	 if($count>0)
	 {
		 
	 ?>
	
        	      <table class="table table-bordered table-hover ">
    <thead style="text:center">
      <tr>
        <th>Sno.</th>
        <th>Title</th>
        <th>Image</th>
        <th>Update</th>
        <th>Delete</th>
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
        <td><?php echo $r['title']; ?></td>
       <td><img src="<?php echo '../img/'.$r['Image']; ?>" style="height:120px;width:150px"></td> 
	   	<td><a class="btn btn-sm btn-success rounded py-2 px-4" href="deleteslider.php?id=<?php echo $r['sno'];?>">Update</a></td>
		<td><a class="btn btn-sm btn-danger rounded py-2 px-4" href="deleteslider.php?id=<?php echo $r['sno'];?>">Delete</a></td>
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
</body>
</html>

