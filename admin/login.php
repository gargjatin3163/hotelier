<?php 
session_start();
include"adminconn.php";

if(isset($_POST['sub']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	
	$a="SELECT * from admin where Email='$email' and Password='$pass'";
	
	$run=mysqli_query($connection,$a);
	
	$count=mysqli_num_rows($run);
	
	if($count>0)
	{
	    while($r=mysqli_fetch_array($run))
		{
			$_SESSION['name']=$r['Name'];
				$_SESSION['U_id']=$r['Sno'];
			//echo $_SESSION['name'];
			header("location:index.php");
		}
	}
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
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
      <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post">
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
        <div class="">
          <label class="block text-sm text-gray-00" for="email">Email</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="email" name="email" placeholder="Your Email" aria-label="Email">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password">Password</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password"  name="pass"  type="text" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-1 items-center justify-between">
          <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="#">
            Forgot Password?
          </a>
        </div>
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="sub" type="submit">Login</button>
       <!-- <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="#">Not registered?</a>-->
      </form>
    </div>
  </div>
</div>
</body>

</html>
