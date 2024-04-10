<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="Forrespo/adminresponse.css">
</head>
<body>
<h2 class="vows">Vows & Veils Wedding</h2>
    <h1>Plan your 
Perfect 
Wedding 
With us.</h1>
<div class="SignPage">
        <div class="signinPage">
            <form action="admin.php" method="post">
                <h2>Admin</h2> 
                <input type="email" placeholder="Email" name="email" >
                <input type="password" placeholder="Password" name="password">
                <button name="submit" id="createBtn">Submit</button>
                <button name="back" id="backBtn">Back</button>
            </form>
        </div>
 </div>
 <?php
$db_server = "localhost";
 $db_user = "root";
 $db_pass = "";
 $db_name = "admindb";
 $db_connection = "";
 

 $db_connection = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
 if(isset($_POST['submit'])){
   
    $admin_email = $_POST["email"];
    $password = $_POST['password'];
    
     $sql  = "SELECT * FROM myadmin WHERE email = '$admin_email' AND password = '$password'";
     $result =  mysqli_query($db_connection,$sql);
     $count = mysqli_num_rows($result);
        if ($count > 0) {
            header("Location: adminFile/adminDomain.php");
            exit();
        } elseif (empty($admin_email) || empty($password)) {
            echo "<script> alert('Please fill all fields!')</script>";
        } else {
            $sql_check_email = "SELECT * FROM myadmin WHERE email = '$admin_email'";
            $result_check_email = mysqli_query($db_connection, $sql_check_email);
            $count_check_email = mysqli_num_rows($result_check_email);
        
            if ($count_check_email > 0) {
                echo "<script> alert('Incorrect password!')</script>";
            } else {
                echo "<script> alert('Email not found!')</script>";
            }
        }

}

if(isset($_POST['back'])){
    header("Location: login.php");
}

  
 
?>
</body>
</html>