<?php
session_start();

?>
<?php


$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "clientdb";

$db_connection = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

$error_message = ""; // Initialize error message variable

if (isset($_POST['btnsubmit'])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $student_name = $_POST["email"];
        $password = $_POST['password'];

        $sql = "SELECT password FROM clients WHERE customeremail = '$student_name'";
        $result = mysqli_query($db_connection, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];

            if (password_verify($password, $hashed_password)) {
                header("Location: UserFile/userDomain.php");
                exit();
            } else {
                $error_message = "Password incorrect. Please try again.";
            }
        } else {
            $error_message = "User not found. Please check your email.";
        }
    } else {
        $error_message = "Please enter both email and password.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="Forrespo/loginrresponse.css">
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
        <div class="signinPage">
            <form action="login.php" method="post">
                <h2>Sign In</h2> 
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password"> <br><br>
                <p>Create an account? <a href="CreateAcc.php">CLICK HERE!</a></p>
                <p>Log In as Admin? <a href="admin.php">CLICK HERE!</a></p>
                <input type="submit" name="btnsubmit" id="sumbitbtn">
            </form>
        </div>
 </div>
 <?php if ($error_message): ?>
        <script>
            alert("<?php echo $error_message; ?>");
        </script>
    <?php endif; ?>
</body>


</html>