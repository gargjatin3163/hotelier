<!--Header Start-->
<?php
session_start();			
include "mconn.php";

if (isset($_POST['sub'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Check if email or password field is empty
    if (empty($email) || empty($pass)) {
        echo "<script>
            alert('Both fields are required. Please fill out all fields.');
            window.location.href='login.php';
        </script>";
    } else {
        $a = "SELECT * FROM signup WHERE Email='$email' AND Password='$pass'";
        $run = mysqli_query($conn, $a);
        $count = mysqli_num_rows($run);

        if ($count > 0) {
            while ($r = mysqli_fetch_array($run)) {
                $_SESSION['usr'] = $r['Name'];
                $_SESSION['Email'] = $r['Email'];
                $_SESSION['U_id'] = $r['Sno'];
                // Redirect to index page after successful login
                header("location:index.php");
            }
        } else {
            echo "<script>
                alert('Invalid email or password.');
                window.location.href='login.php';
            </script>";
        }
    }
}

include "header.php";
?>
<!--Header End-->


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Login</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">For login</h6>
            <h1 class="mb-5"><span class="text-dark text-uppercase">Login</span></h1>
        </div>
        
        <form method='post'>
            <div class="row justify-content-center align-items-center g-3">
                <div class="col-md-7">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="name" name="email" placeholder="Your Email">
                        <label for="name">Your Email</label>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="subject" name="pass" placeholder="Password">
                        <label for="subject">Password</label>
                    </div>
                </div><br>
                <div class="col-7">
                    <button class="btn btn-primary w-100 py-3" type="submit" name="sub">Login</button>
                </div>
            </div>
            <br><br>
            <p style="text-align:center">Create new account?<a href="signup.php"><u>Click Here</u></a></p>
        </form>
    </div>
</div>
<!-- Contact End -->

<!-- Footer Start -->
<?php
include "footer.php";
?>
<!-- Footer End -->
