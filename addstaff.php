<form method="post" enctype="multipart/form-data">
<form class="form-group">
<div class="form-group">
Name
<input type="text" class="form-control" name="name">
</div>
<br>
<div class="form-group">
Type of staff
<input type="text" class="form-control" name="type">
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

include"mconn.php";

if(isset ($_POST['sub']))
{
	$name=$_POST['name'];
	$type=$_POST['type'];
	
	$file_name=$_FILES['img']['name'];
	$temp_name=$_FILES['img']['tmp_name'];
	$path="img/".$file_name;
	
	$m=move_uploaded_file($temp_name,$path);
	
	$a="INSERT INTO staff(Name, Type, Image)
	VALUES('$name', '$type','$file_name')";
	
	$run=mysqli_query($conn,$a);
	
	if($run)
	{
		echo"product added";
	}
	else
	{
		echo"not added";
	}
}
?>