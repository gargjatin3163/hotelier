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
  <title>addroom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./dist/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <style>
  .login{
    background: url('./dist/images/login-new.jpeg')
  }
  </style>  
</head>

<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
<div class="w-full max-w-lg">
    <div class="leading-loose">
    <form class="max-w-x m-3 p-10 bg-white rounded shadow-x" method="post" enctype="multipart/form-data">
	<p class="text-gray-800 font-medium text-center text-lg font-bold">Add room</p>
      <div class="">
        <div class="form-group">
         <label class="block text-sm text-gray-00" for="type">Type of room</label>
         <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="text" class="form-control" name="type" id="text" aria-describedby="type" placeholder=" Enter type of room">
        </div>
        <div class="mt-0">
          <label class="block text-sm text-gray-600" for="bed">Number of bed</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="bed" 
		  name="bed"  type="number" placeholder="Enter number of bed" aria-label="bed">
        </div>  
  
        <div class="mt-0">
          <label class="block text-sm text-gray-600" for="bath">Number of bath</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="bed" 
		  name="bath"  type="number" placeholder="Enter number of bath" aria-label="bath">
        </div> 
		  <div class="mt-0">
          <label class="block text-sm text-gray-600" for="description">Discription</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="description" name="desc"  type="text" placeholder="Enter description of room" aria-label="description">
        </div>
		<div class="mt-0">
          <label class="block text-sm text-gray-600" for="price">Price per night</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="price" 
		  name="rs" type="number" placeholder="Enter price of room" aria-label="price">
        </div>
		  <div class="mt-0">
          <label class="block text-sm text-gray-600" for="image">Image of room</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="img" 
		  name="image" class="form-control" type="file" placeholder="Image of entered room" aria-label="img">
        </div>
		<div class="mt-0">
		<button style="align:center" class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="sub" type="submit">Submit</button>
		</div>
    </form>
  </div>
</div>
</div>
</body>
</html>

<?php
include"adminconn.php";

if(isset($_POST['sub']))
{
	$type=$_POST['type'];
	$bed=$_POST['bed'];
	$bath=$_POST['bath'];
	$desc=$_POST['desc'];
	$price=$_POST['rs'];
	
	$file_name=$_FILES['image']['name'];
	$temp_name=$_FILES['image']['tmp_name'];
	$path='../img/'.$file_name;
	
	$m=move_uploaded_file($path,$temp_name);
	
	$a="INSERT INTO addroom(Type, Bed, Bath, Description, Price, Image)
	VALUES('$type','$bed','$bath','$desc','$price','$file_name')";
	
	$run=mysqli_query($connection,$a);
	
	if($run)
	{
		echo"<script>alert('Product added successfully.')</script>";
	}
	else
	{
		echo"not added";
	}
}
?>

