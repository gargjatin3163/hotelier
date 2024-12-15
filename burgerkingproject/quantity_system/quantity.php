<?php 
include "mconn.php";

if(isset($_POST['qy'])){
    $qty=$_POST['qy'];
    $id=$_POST['get_id'];
    $price=$_POST['price'];
 
    $tprice= $qty*$price;

    $qty_up="UPDATE roombook set quantity='$qty',total_price='$tprice' where Sno='$id'";
    $run=mysqli_query($conn,$qty_up);
    if($run){
        echo 1;
    }
    else{
        echo 0;
    }
}
?>