<?php
include"proconn.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];

$a="DELETE from cart where sno='$id'";

$run=mysqli_query($projectconn,$a);
header('location:viewcart.php');
}

?>