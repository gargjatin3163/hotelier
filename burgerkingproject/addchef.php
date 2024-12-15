<form method="post" enctype="multipart/form-data">
<form class="form-group">
<div class="form-group">
Name
<input type="text" class="form-control" name="name">
</div>
<br>
<div class="form-group">
Work
<input type="text" class="form-control" name="work">
</div>
<br>
<div class="form-group">
Image
<input type="file" class="form-control" name="img">
</div>
<br>
<input type="submit" value="Add product" name="sub">
</form>


<?php
include"Proconn.php";

if (isset($_POST['sub']))
{
	$name=$_POST['name'];
	$work=$_POST['work'];
	
	$file_name=$_FILES['img']['name'];
	$temp_name=$_FILES['img']['tmp_name'];
	$path="img/".$file_name;
	
	$m=move_uploaded_file($temp_name,$path);
	
	$a="INSERT INTO chef(Name, Work, Image)
	VALUES('$name','$work','$file_name')";
	
	$run=mysqli_query($projectconn,$a);
	
	if($run)
	{
		echo"Chef added";
	}
	else
	{
		echo"not added";
	}
}
?>