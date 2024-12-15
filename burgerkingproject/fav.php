<?php
include"proconn.php";

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
 
if (isset($_GET['pid']))
{
	$pid=$_GET['pid'];
	
	$a="SELECT * from foodproduct where sno='$pid'";
	
	$run=mysqli_query($projectconn,$a);
	
	$count=mysqli_num_rows($run);
	
	if ($count>0)
	{
	    while($r=mysqli_fetch_array($run))
		{
			$sno=$r['sno'];
			$pname=$r['Name'];
			$pprice=$r['Price'];
			$pimage=$r['Image'];
		}
			$inscart="INSERT into fav(U_id,p_id,p_name,p_price,p_image)
			values('$uid', '$sno','$pname','$pprice','$pimage')";

 $run=mysqli_query($projectconn,$inscart);

if ($run)
{
echo"<script>alert('Product added into favourite.')</script>";
header("location:viewfav.php");
}
    }
}
}	
?>