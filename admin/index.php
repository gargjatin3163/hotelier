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
<?php

include"adminconn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Dashboard | Tailwind Admin</title>
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Luxury Living</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    
					
					
                    <?php
					if (isset($_SESSION['name']))
					{
					?> 
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="img/profileimage.png" alt="image">
                    <a href="#" onclick="profileTxoggle()" class="text-white p-2 no-underline hidden md:block lg:block"><?php echo $_SESSION['name']; ?></a>
					<?php
					}
					?>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="index.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
					      <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="addroom.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                             <i class="fab fa-wpforms float-left mx-2"></i>
                            Add Room
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
					     <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="addstaff.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                             <i class="fab fa-wpforms float-left mx-2"></i>
                          Add Staff
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
					<li class="w-full h-full py-3 px-2 border-b border-light-border">
                       <a href="addslider.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                             <i class="fab fa-wpforms float-left mx-2"></i>
                          Add Slider
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                 								
									
                    
					<li class="w-full h-full py-3 px-2 border-b border-light-border nav-item drodown">
                        <a href="Signup.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm  nav-link dropdown-toggle">
                            <i class="fas fa-table float-left mx-2"></i>
                         Signup
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
						</li>
							<li class="w-full h-full py-3 px-2 border-b border-light-border nav-item drodown">
                        <a href="Viewroom.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm  nav-link dropdown-toggle">
                            <i class="fas fa-table float-left mx-2"></i>
                         Rooms
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
						</li>
							
							<li class="w-full h-full py-3 px-2 border-b border-light-border nav-item drodown">
                        <a href="viewstaff.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm  nav-link dropdown-toggle">
                            <i class="fas fa-table float-left mx-2"></i>
                     Staff
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
						</li>
						
							<li class="w-full h-full py-3 px-2 border-b border-light-border nav-item drodown">
                        <a href="viewslider.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm  nav-link dropdown-toggle">
                            <i class="fas fa-table float-left mx-2"></i>
                     Slider
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
						</li>
							
							<li class="w-full h-full py-3 px-2 border-b border-light-border nav-item drodown">
                        <a href="roombook.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm  nav-link dropdown-toggle">
                            <i class="fas fa-table float-left mx-2"></i>
                         Bookings
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
						</li>
						
							<li class="w-full h-full py-3 px-2 border-b border-light-border nav-item drodown">
                        <a href="review.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm  nav-link dropdown-toggle">
                            <i class="fas fa-table float-left mx-2"></i>
                        Reviews
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
						</li>
						
							<li class="w-full h-full py-3 px-2 border-b border-light-border nav-item drodown">
                        <a href="savelatter.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm  nav-link dropdown-toggle">
                            <i class="fas fa-table float-left mx-2"></i>
                        Savelatter
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
						</li>
						<li class="w-full h-full py-3 px-2 border-b border-light-border nav-item drodown">
                        <a href="viewquery.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm  nav-link dropdown-toggle">
                            <i class="fas fa-table float-left mx-2"></i>
                     Query
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
						</li>
						
							<li class="w-full h-full py-3 px-2 border-b border-light-border nav-item drodown">
                        <a href="newsletter.php" target="view"
                           class="font-sans font-hairline hover:font-normal text-sm  nav-link dropdown-toggle">
                            <i class="fas fa-table float-left mx-2"></i>
                        Newsletter
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
						</li>
                   
                    <li class="w-full h-full py-3 px-2">
                        
                        <ul class="list-reset -mx-2 bg-white-medium-dark">
                            <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
									<?php
		            if (!isset($_SESSION['name']))
		            {			
                     echo"<a href='login.php' class='mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline'>Login Page<span><i class='fa fa-angle-right float-right'></i></span></a>";
					}
					elseif(isset($_SESSION['name']))
		            {
					 echo"<a href='logout.php' class='mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline'>Logout Page<span><i class='fa fa-angle-right float-right'></i></span></a>";
					}
					 ?>
                            </li>
							
		
							<?php
		/*if (!isset($_SESSION['usr']))
		{
			echo"<a class='btn btn-outline-primary float-end' href='login.php' >Login</a>&nbsp;";
		}
		elseif(isset($_SESSION['usr']))
		{
			echo"<a class='btn btn-outline-primary float-end' href='logout.php' >Logout</a>&nbsp;";
		}*/
		?>
                          
                        </ul>
                    </li>
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
							<?php
								include"adminconn.php";
								$x="SELECT * from totalvisitor";
								
								$y=mysqli_query($connection,$x);
								
								$z=mysqli_num_rows($y);
								
								?>
                                <a href="#" class="no-underline text-white text-2xl">
                                  <?php echo $z; ?>
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Visitors
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
							<?php
								include"adminconn.php";
								$x="SELECT * from review";
								
								$y=mysqli_query($connection,$x);
								
								$z=mysqli_num_rows($y);
								
								?>
                                <a href="#" class="no-underline text-white text-2xl">
                                     <?php echo $z; ?>
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Reviews
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
							<?php
								include"adminconn.php";
								$x="SELECT * from signup";
								
								$y=mysqli_query($connection,$x);
								
								$z=mysqli_num_rows($y);
								
								?>
                                <a href="#" class="no-underline text-white text-2xl">
                                <?php echo $z; ?>
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Users
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
							<?php
								include"adminconn.php";
								$x="SELECT * from addroom";
								
								$y=mysqli_query($connection,$x);
								
								$z=mysqli_num_rows($y);
								
								?>
                                <a href="#" class="no-underline text-white text-2xl">
                                   <?php echo $z; ?>
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Rooms
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /Stats Row Ends Here -->

              
                  
                    
                </div>
				    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 mt-2">
	<iframe class="embed-responsive-item" name="view" height="500px" width="1000px"></iframe>
            </div>
			</main>
            <!--/Main-->
			
        </div>
	
       

    </div>

</div>
<script src="./main.js"></script>
</body>

</html>