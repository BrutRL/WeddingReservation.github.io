<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="orders.css">
    <link rel="stylesheet" href="allstyles.css">
</head>
<body>
    <div class="header">
        <h1 class="admin">Admin Panel</h1> <br>
        <nav>
            <a href="adminDomain.php">Home</a>
            <a href="listuser.php">User</a>
            <a href="Productlist.php">Product</a>
            <a href="Order.php">Orders</a>
            <a href="feedback.php">Feedback</a>
            <a href="../admin.php">Log Out</a>
            
        </nav>
    </div>
    <div class="center">
    <div class="orders">
        <?php
        if(isset($_SESSION['clientOrders'])) {
            $noOrders = true;
            foreach($_SESSION['clientOrders'] as $clientName => $orders) {
                echo "<h2>Client Name: $clientName</h2>";
                if(!empty($orders)) {
                    $noOrders = false;
                    echo "<h2>Reserved Items:</h2>";
                    echo "<div class='reserved-items'>"; 
                    echo "<form method='post' action=''>";
                    echo "<input type='hidden' name='client_name' value='$clientName'>";
                    echo "<ul>";
                    $totalPrice = 0;
                    foreach($orders as $key => $item) {
                        $itemPrice = $item['price'] * $item['quantity'];
                        echo "<li>{$item['name']} - Quantity: {$item['quantity']} - Price per unit: {$item['price']}";
                        $totalPrice += $itemPrice;
                    }
                    echo "</ul>";
                    echo "<p>Total Price: ₱ {$totalPrice}</p>";
                    echo "<button type='submit' name='confirm_delete' class ='btnConfirm'>Confirm Order</button>";
                    echo "</form>";
                    echo "</div>";
                } 
            }
            if($noOrders) {
                echo "<p>No orders</p>"; 
            }
        } else {
            echo "<h2>No clients or orders yet</h2>";
        }
       
        if(isset($_POST['confirm_delete'])) {
            if(isset($_POST['client_name'])) {
                $clientNameToDelete = $_POST['client_name'];
                if(isset($_SESSION['clientOrders'][$clientNameToDelete])) {
                    unset($_SESSION['clientOrders'][$clientNameToDelete]);
                    echo "<meta http-equiv='refresh' content='0'>";
                }
            } else {
                echo "<p>Error: Client name not provided.</p>";
            }
        }
        ?>
    </div>
    </div>
</body>
</html>
