<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Burger King - Food Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="searchbar/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Burger <span>King</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
				
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">


					<div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="chef.php" class="nav-item nav-link">Chef</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a> 
						<a href="contact.php" class="nav-item nav-link">Contact</a>
						
						<?php
						if(isset($_SESSION['name']))
						{
							?>
                        <div class="nav-item dropdown">
                           <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">View</a>
                                <div class="dropdown-menu">
                                    <a href="viewcart.php" class="dropdown-item"><i class="fa fa-shopping-cart"></i>&nbsp;Cart</a>
						            <a href="viewfav.php" class="dropdown-item"><i class="fa fa-heart"></i>&nbsp;Favourite</a>
                                </div>
                        </div>
						<?php
						}
						?>
                      
								<?php
		if (!isset($_SESSION['name']))
		{
			echo"<a class='btn btn-outline-warning float-end' href='login.php' >Login</a>&nbsp;";
		}
		elseif(isset($_SESSION['name']))
		{
			echo"<a class='btn btn-outline-warning' href='logout.php'>Logout</a>&nbsp;";
		}
		?>
                    </div>
                </div>
            </div>
        </div>
	         
        <!-- Nav Bar End -->
