<?php
session_start();
include"mconn.php";
 
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

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	
	$a="SELECT * from addroom where Sno='$id'";
	
	$run=mysqli_query($conn,$a);
	
	$count=mysqli_num_rows($run);
	
	if($count>0)
	{
		while($r=mysqli_fetch_array($run))
		{
			$sno=$r['Sno'];
			$type=$r['Type'];
			$bed=$r['Bed'];
			$bath=$r['Bath'];
			$desc=$r['Description'];
			$price=$r['Price'];
			$img=$r['Image'];
		}
			
			$insert="INSERT into savelater(U_id,id, Type, Bed, Bath, Description, Price, Image)
			Values('$uid','$sno', '$type', '$bed', '$bath', '$desc', '$price', '$img')";
			
	       $run=mysqli_query($conn,$insert);
		   
		   if($run)
		   {
			 echo"<script>
	alert('Product added in savelater successfully.');
	window.location.href='viewsavelater.php';
	</script>";
}
		   }
	}
}


?>