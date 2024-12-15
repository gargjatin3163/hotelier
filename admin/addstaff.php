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
  <title>addstaff</title>
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
    <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post" enctype="multipart/form-data">
	<p class="text-gray-800 font-medium text-center text-lg font-bold">Add room</p>
      <div class="">
	   <div class="form-group">
         <label class="block text-sm text-gray-00" for="type">Name of staff</label>
         <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="name" class="form-control" name="name" id="text" aria-describedby="name" placeholder=" Enter name of staff">
        </div>
        <div class="form-group">
         <label class="block text-sm text-gray-600" for="type">Type of staff</label>
         <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="text" class="form-control" name="type" id="text" aria-describedby="type" placeholder=" Enter type of room">
        </div>
		  <div class="mt-2">
          <label class="block text-sm text-gray-600" for="image">Image of room</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="img" 
		  name="image" class="form-control" type="file" placeholder="Image of entered room" aria-label="img">
        </div>
		<div class="mt-2">
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
	$name=$_POST['name'];
	$type=$_POST['type'];
	
	$file_name=$_FILES['image']['name'];
	$temp_name=$_FILES['image']['tmp_name'];
	$path='../img/'.$file_name;
	
	$m=move_uploaded_file($path,$temp_name);
	
	$a="INSERT INTO staff(Name, Type, Image)
	VALUES('$name', '$type','$file_name')";
	
	$run=mysqli_query($connection,$a);
	
	if($run)
	{
		echo"<script>alert('Staff added successfully.')</script>";
	}
	else
	{
		echo"not added";
	}
}
?>

