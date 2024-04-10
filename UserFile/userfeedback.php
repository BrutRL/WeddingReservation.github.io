<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Section</title>
    <link rel="stylesheet" href="userfeedbacks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Gilda+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Gilda+Display&family=Gwendolyn:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Gilda+Display&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <h2 class="title">Vows & Veils Wedding</h2>
        <nav class="mainNav">
             <a href="../UserFile/userDomain.php">Home</a>
            <a href="../UserFile/userDomain.php#food">Services</a>
            <a href="#contactUs">Contact Us</a>
        </nav>
    </header>
    <div class="feedUser">
        <form action="userfeedback.php" method="post">
            <input type="text" name="userName" placeholder="Enter your Name" class="name">
            <textarea name="userComment" id="" cols="30" rows="10"></textarea> <br>
            <input type="submit" name="btnSubmit" class="btnsubmit">
        </form>
    </div>
     <?php

      
        if(isset($_POST['btnSubmit'])){
            $username = $_POST['userName'];
            $comment = $_POST['userComment'];

            if(empty($username)|| empty($comment)){
                echo "<script> alert('Please fill the field!!!')</script>";
            }else{

                $feedbackArray = isset($_SESSION['feedback']) ? $_SESSION['feedback'] : array();
                $newFeedback = array(
                    'userName' => $_POST['userName'],
                    'userComment' => $_POST['userComment']
                );
                $feedbackArray[] = $newFeedback;
                $_SESSION['feedback'] = $feedbackArray;
            }

            
            
        }
         
        ?>
           <footer id="contactUs">
            <div class="contactdescrip">
                <h3 class="contactVows">Vows & Veils Wedding</h3>
                <p class="contactdescript">Welcome to Vows & Veils your premier destination for seamless wedding reservations and planning! We understand that your wedding day is one of the most special moments in your life, and we're here to ensure that every aspect of your celebration is nothing short of perfection.</p>
            </div>
            <div class="contactInfo">
                <p class="contacttext">Contact Us</p>
                <div class="infocontact">
                    <img src="location.png" alt="" width="50px"><label for="">2025 M Street, NW, Washington, DC, 20036</label> <br>
                    <img src="telephone.png" alt="" width="50px"> <label for="">09991632930</label> <br> 
                    <img src="mail.png" alt="" width="50px"><label for="">ar7459101@gmail.com</label>
            </div> 
            </div>
            <div class="linewhite">
            <p class="footerabout">@Vows & Veils Wedding 2024 </p> 
            <p class="footer2about">Copyright (c) 2024 Copyright Holder All Rights Reserved.</p>
       </div>
    </footer>
</body>
</html>