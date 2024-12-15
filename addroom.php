<form method="post" enctype="multipart/form-data">
<form class="form-group">
<div class="form-group">
Type
<input type="text" class="form-control" name="type">
</div>
<br>
<div class="form-group">
Number of bed
<input type="number" class="form-control" name="nbed">
</div>
<br>
<div class="form-group">
Number of bath
<input type="number" class="form-control" name="nbath">
</div>
<br>
<div class="form-group">
price
<input type="number" class="form-control" name="rs">
</div>
<br>
<div class="form-group">
Description
<input type="text" class="form-control" name="desc">
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

if (isset($_POST['sub']))
{
	$type=$_POST['type'];
	$bed=$_POST['nbed'];
	$bath=$_POST['nbath'];
	$price=$_POST['rs'];
	$desc=$_POST['desc'];
	
	$file_name=$_FILES['img']['name'];
	$temp_name=$_FILES['img']['tmp_name'];
	$path="img/".$file_name;
	
	$m=move_uploaded_file($temp_name,$path);
	
	$a="INSERT INTO addroom(Type, Bed, Bath, Description,Price, Image)
	VALUES('$type','$bed','$bath','$desc','$price','$file_name')";
	
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