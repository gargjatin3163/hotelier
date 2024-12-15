<form method="post" enctype="multipart/form-data">
Product name
<input type="text" name="pname">
<br><br>
Product price
<input type="text" name="pprice">
<br><br>
Product description
<input type="text" name="pdesc">
<br><br>
Product category
<input type="text" name="pcat">
<br><br>
Product image
<input type="file" name="pimg">
<br><br>

<input type="submit" name="sub" value="Add Product">
</form>


<?php
include"proconn.php";

if(isset($_POST['sub']))
{
	$name=$_POST['pname'];
	$price=$_POST['pprice'];
	$desc=$_POST['pdesc'];
	$cat=$_POST['pcat'];

//for image
$file_name=$_FILES['pimg']['name'];
$temp_name=$_FILES['pimg']['tmp_name'];
$path='img/'.$file_name;

$m=move_uploaded_file($temp_name,$path);

$a="INSERT INTO foodproduct(Name,Price,Description,Category,Image)
values('$name','$price','$desc','$cat','$file_name')";

$run=mysqli_query($projectconn,$a);

if($run)
{
	echo"added";
}
else
{
	echo"fail to add";
}
}
?>