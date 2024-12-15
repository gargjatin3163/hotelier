<?php 
include "proconn.php";

if(isset($_POST['qy'])){
    $qty=$_POST['qy'];
    $id=$_POST['get_id'];
    $price=$_POST['p_price'];
 
    $tprice= $qty*$price;

    $qty_up="UPDATE cart set quantity='$qty',total='$tprice' where sno='$id'";
    $run=mysqli_query($projectconn,$qty_up);
    if($run){
        echo 1;
    }
    else{
        echo 0;
    }
}
?>