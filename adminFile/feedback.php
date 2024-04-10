<?php
   session_start();
    if(isset($_POST['delete_feedback'])) {
        $index = $_POST['feedback_index'];
        if(isset($_SESSION['feedback'][$index])) {
            unset($_SESSION['feedback'][$index]);
            $_SESSION['feedback'] = array_values($_SESSION['feedback']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css">
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
    <div class="comment">
    <?php
         
          
            if(isset($_SESSION['feedback']) && !empty($_SESSION['feedback'])) {
                foreach($_SESSION['feedback'] as $index => $feedback) {
                    echo "<div class='feedback-item'>";
                    echo "<p><strong>User Name:</strong> " . $feedback['userName'] . "</p>";
                    echo "<p><strong>User Comment:</strong> " . $feedback['userComment'] . "</p>";
                    echo "<form action='' method='post'>";
                    echo "<input type='hidden' name='feedback_index' value='$index'>";
                    echo "<button type='submit' class='delete-btn' name='delete_feedback'>Delete</button>";
                    echo "</form>";
                    echo "</div>";
                }
            } else {
                echo "<p>No feedback yet.</p>";
            }
    ?>
    </div>
</body>
</html>