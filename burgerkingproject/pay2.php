<?php
session_start();
if(!isset($_SESSION['name']))
{
	
    header('location:login.php');
   
}
else
{
	 $user = $_SESSION['name'];

include "proconn.php";
if(isset($_POST['pay']))
{
$payment= $_POST['payment'];
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$num= $_POST['num'];
$email= $_POST['email'];
$add1= $_POST['add1'];
$add2= $_POST['add2'];
$country= $_POST['country'];
$state= $_POST['state'];
$zip= $_POST['zip'];



$x = "INSERT into checkout(Fname, Lname, contact, Email, Address1, Address2, Country, State, Zip)
   values('$fname','$lname','$num','$email','$add1','$add2', '$country', '$state', '$zip')";

$y = mysqli_query($projectconn,$x);
if($y){
    $a2 = "SELECT * from cart where U_id='$user'";
    $b1 = mysqli_query($projectconn,$a2);
    $c = mysqli_num_rows($b1);
    if($c>0)
	{
        while($m=mysqli_fetch_array($b1))
		{
          $p_id=$m['p_id'];
    
    $count= $m[0];
    $pprice=$m['p_price']; 
        }
    

    $insertorder = "INSERT into ordered_item(p_id,pcount,pprice,gtotal,U_id)
       values('$p_id','$count','$pprice','$payment','$user')";
    $irun = mysqli_query($projectconn,$insertorder);
    if($irun){
        $del = "DELETE from cart where U_id='$user'";
        $drun = mysqli_query($projectconn,$del);
        if($drun){
            echo "<script>
            alert('Yahoo!...Order Placed')
            </script>";
    }
}
}
}
}
}
?>

<html>
<head>
<title>Pay through PayPal: www.TestAccount.com</title>
</head>
 <body onLoad="document.forms['paypalForm'].submit();">
<form name="paypalForm" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
 <input type="hidden" name="cmd" value="_xclick" />
 <input type="hidden" name="business" value="sb-eyptr26786321@business.example.com" />
 <input type="hidden" name="password" value="CK8YLQM54PQLD3UU" />
 <input type="hidden" name="custom" value="1123" />
 <input type="hidden" name="item_name" value="10" />
 <input type="hidden" name="amount" value="<?php echo $payment; ?>"/>
 <input type="hidden" name="rm" value="30" />
 <input type="hidden" name="return" value="success.php" />
 <input type="hidden" name="cancel_return" value="cancel.php" />
 <input type="hidden" name="cert_id" value="AB16b8bTJi3mf0c8kNYnpuvt9Qq8A.TaH2iB09JIIX1AL6j2NLRwLIgf" />
</form>
</body>
</html>