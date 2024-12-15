<?php
session_start();
if(!isset($_SESSION['U_id']))
{
	
    header('location:login.php');
   
}
else
{
    include "mconn.php";
	 $uid = $_SESSION['U_id'];

     $name=$_POST['usr'];
     $email=$_POST['email'];
     $checkin=$_POST['checkin'];
     $checkout=$_POST['checkout'];
     $adult=$_POST['adult'];
     $child=$_POST['child'];
     $roomno=$_POST['sno'];
     $room=$_POST['room'];
     $price=$_POST['price'];
     $rqst=$_POST['rqst'];
     
     $a="INSERT into roombook(U_id, b_name, b_email, b_checkin, b_checkout, b_adult, b_child , room_no, b_room, b_price, b_spclrqst)
     VALUES ('$uid','$name', '$email','$checkin', '$checkout', '$adult', '$child','$roomno', '$room','$price', '$rqst')";
     
     $b=mysqli_query($conn,$a);
         
    }
?>

<html>
<head>
<title>Pay through PayPal: www.TestAccount.com</title>
</head>
 <body onLoad="document.forms['paypalForm'].submit();">
<form name="paypalForm" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
 <input type="hidden" name="cmd" value="_xclick" />
 <input type="hidden" name="business" value="hotelier@business.com" />
 <input type="hidden" name="password" value="Garg@231" />
 <input type="hidden" name="custom" value="1123" />
 <input type="hidden" name="item_name" value="10" />
 <input type="hidden" name="amount" value="<?php echo $price; ?>"/>
 <input type="hidden" name="rm" value="30" />
 <input type="hidden" name="return" value="success.php" />
 <input type="hidden" name="cancel_return" value="cancel.php" />
 <input type="hidden" name="cert_id" value="ARKKjAgrE8r4CHWpmgmpfP24UAKwA5Q7sugmluZ-7ruFqaFo.qyllC3n" />
</form>
</body>
</html>