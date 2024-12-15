<?php
include"proconn.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];

$a="DELETE from fav where sno='$id'";

$run=mysqli_query($projectconn,$a);
header('location:viewfav.php');
}

?>