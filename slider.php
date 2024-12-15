<form method="post" enctype="multipart/form-data">
<form class="form-group">
<div class="form-group">
Title
<input type="text" class="form-control" name="title">
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
	$title=$_POST['title'];
	
	
	$file_name=$_FILES['img']['name'];
	$temp_name=$_FILES['img']['tmp_name'];
	$path="img/".$file_name;
	
	$m=move_uploaded_file($temp_name,$path);
	
	$a="INSERT INTO slider(title, Image)
	VALUES('$title','$file_name')";
	
	$run=mysqli_query($conn,$a);
	
	if($run)
	{
		echo"Slider added";
	}
	else
	{
		echo"not added";
	}
}
?>





















Celebrate life with us

You are the reason we come to work

Making your stay memorable

Welcome to happiness

Your smile, our happiness.

Your comfort is our pride


