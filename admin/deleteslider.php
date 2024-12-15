<?php
include"adminconn.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];

$a="DELETE from slider where sno='$id'";

$run=mysqli_query($connection,$a);
header('location:viewslider.php');
}

?>