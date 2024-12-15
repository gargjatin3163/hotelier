<!--Header Start-->
<?php
session_start();
include "header.php";
?>
<!--Header End-->


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Registration</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Signup</li>
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
            <h6 class="section-title text-center text-primary text-uppercase">Please Register yourself</h6>
            <h1 class="mb-5"><span class="text-dark text-uppercase">Signup</span>
        </div>
        <form method='post'>
            <div class="row justify-content-center align-items-center g-3">
                <div class="col-md-7">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="usr" placeholder="Your Name">
                        <label for="name">Your Name</label>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        <label for="email">Your Email</label>
                    </div>
                </div>
                <div class="col-7">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="subject" name="pass" placeholder="Password">
                        <label for="subject">Password</label>
                    </div>
                </div>
                <div class="col-7">
                    <button class="btn btn-primary w-100 py-3" type="submit" name="sub">Signup</button>
                </div>
            </div>
            <br><br>
            <p style="text-align:center">Already have an account?<a href="login.php"><u>Click Here</u></a></p>
        </form>
        
        <?php
        include "mconn.php";
        echo '<br><br>';

        if (isset($_POST['sub'])) {
            $name = $_POST['usr'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            // Check if any field is empty
            if (empty($name) || empty($email) || empty($pass)) {
                echo "<script>
                alert('All fields are required. Please fill out all fields.');
                window.location.href='signup.php';
                </script>";
            } else {
                // Check if email already exists
                $checkEmailQuery = "SELECT * FROM signup WHERE Email = '$email'";
                $result = mysqli_query($conn, $checkEmailQuery);

                if (mysqli_num_rows($result) > 0) {
                    // If email already exists, show error message
                    echo "<script>
                    alert('Email already exists. Please use a different email.');
                    window.location.href='signup.php';
                    </script>";
                } else {
                    // If email does not exist, proceed with registration
                    $a = "INSERT INTO signup(Name, Email, Password) VALUES ('$name', '$email', '$pass')";

                    $run = mysqli_query($conn, $a);

                    if ($run) {
                        echo "<script>
                        alert('Thank you for signing up.');
                        window.location.href='login.php';
                        </script>";
                    } else {
                        echo "<script>
                        alert('Something went wrong. Please try again.');
                        window.location.href='signup.php';
                        </script>";
                    }
                }
            }
        }
        ?>
    </div>
</div>
<!-- Contact End -->


<!--Footer Start-->
<?php
include "footer.php";
?>
<!--Footer End-->