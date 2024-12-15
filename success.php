<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['U_id'])) {
    header('location:login.php');
    exit();
}

// Display a success message
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 18px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Successful!</h1>
        <p>Thank you for your payment. Your booking has been confirmed.</p>
        <p><strong>Transaction Details:</strong></p>
        <ul>
            <li>Booking ID: <?php echo uniqid("BOOK_"); ?></li>
            <li>Amount Paid: <?php echo htmlspecialchars($_POST['mc_gross'] ?? "N/A"); ?> USD</li>
            <li>Transaction ID: <?php echo htmlspecialchars($_POST['txn_id'] ?? "N/A"); ?></li>
        </ul>
        <a href="dashboard.php">Return to Dashboard</a>
    </div>
</body>
</html>
