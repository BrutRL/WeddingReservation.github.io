<?php
session_start();

?>
<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "clientdb";

$db_connection = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

$firstNameValue = isset($_POST['fname']) ? $_POST['fname'] : '';
$lastNameValue = isset($_POST['lname']) ? $_POST['lname'] : '';
$emailValue = isset($_POST['email']) ? $_POST['email'] : '';
$passwordValue = isset($_POST['password']) ? $_POST['password'] : '';


try {
    if (isset($_POST['btnCreate'])) {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];

    
        if (!preg_match('/^[a-zA-Z\s]+$/', $firstName)) {
            throw new Exception("First name must contain only letters and spaces");
        }

      
        if (preg_match('/[0-9]/', $lastName)) {
            throw new Exception("Last name cannot contain numbers");
        }

      
        $student_email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        if (!filter_var($student_email, FILTER_VALIDATE_EMAIL)) {   
            throw new Exception("Invalid email format");
        }

        if (substr($student_email, -10) !== "@gmail.com") {
            throw new Exception("Email must end with '@gmail.com'");
        }
       
        $password = $_POST['password'];
        if (strlen($password) < 8) {
            throw new Exception("Password must be at least 8 characters long");
        }

       
        if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
            throw new Exception("Password must contain at least one special character");
        }

        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);

       
        $sql = "INSERT INTO clients (customeremail, password, FirstName, LastName) VALUES ('$student_email', '$hash','$firstName','$lastName')"; 
        if (mysqli_query($db_connection, $sql)) {
            echo "<script>alert('Account successfully created!');</script>";
            $firstNameValue = '';
            $lastNameValue = '';
            $emailValue = '';
            $passwordValue = '';
        } else {
            throw new Exception("Error creating account");
        }
        
        $_SESSION['hash'] = $hash;
    }
} catch (Exception $e) {
    echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
}

    if(isset($_POST['btnBack'])){
        header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="Forrespo/createrespos.css">
    <link rel="stylesheet" href="createAccs.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Gilda+Display&family=Gwendolyn:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<h2 class="vows">Vows & Veils Wedding</h2>
    <h1>Plan your 
Perfect 
Wedding 
With us.</h1>
<div class="SignPage">
        <div class="signinPage" style="height: 650px;">
      <form action="CreateAcc.php" method="post">
            <input type="text" placeholder="Firstname" id="fname" name="fname" value="<?php echo htmlspecialchars($firstNameValue); ?>"><br>
            <input type="text" placeholder="Lastname" id="lname" name="lname" value="<?php echo htmlspecialchars($lastNameValue); ?>"><br>
            <input type="email" placeholder="Email" id="email" name="email" value="<?php echo htmlspecialchars($emailValue); ?>"><br>
            <input type="password" placeholder="Password" id="password" name="password" value="<?php echo htmlspecialchars($passwordValue); ?>"><br>

            <input type="submit" name="btnCreate" value="Create" id="createBtn">
            <button name="btnBack" id="backBtn">Back</button>
    </form>
        </div>
 </div>
    
</body>

</html>