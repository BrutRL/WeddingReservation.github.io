<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="gallerys.css">
    <link rel="stylesheet" href="galleryrespo.css">
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Gilda+Display&family=Gwendolyn:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    <div class="photographerCollab">
        <h1>Photographers Collaborated with </h1>
        <h1>Vows  & Veils Wedding</h1>
    </div>
    <div class="mainlogo">
        <div class="firstLogo">
            <img src="PhotographerLogo/image (4).png" alt="" width="100%">
            <button id="btncheckDetails">Check Details</button>
        </div>
        <div class="secondLogo">
            <img src="PhotographerLogo/image (3).png" alt="" width="100%">
            <button id="btncheckDetails2">Check Details</button>
        </div>
        <div class="thirdLogo">
            <img src="PhotographerLogo/image (2).png" alt="" width="100%">
            <button id="btncheckDetails3">Check Details</button>
        </div>
        <div class="fourthLogo">
            <img src="PhotographerLogo/image (1).png" alt="" width="100%">
            <button id="btncheckDetails4">Check Details</button>
        </div>
    </div>
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
<script>
            const royTatel = document.getElementById('btncheckDetails');
            royTatel.addEventListener('click',()=>{
                window.location.assign('Roytatel.php');
            })
            const jcreative = document.getElementById('btncheckDetails2');
        jcreative.addEventListener('click',()=>{
            window.location.assign('jcreatives.php');
        })
            const faiga = document.getElementById('btncheckDetails3');
            faiga.addEventListener('click',()=>{
                window.location.assign('faiga.php');
            })
            const elwin = document.getElementById('btncheckDetails4');
        elwin.addEventListener('click',()=>{
            window.location.assign('elwin.php');
        })
</script>
</html>