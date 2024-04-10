<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHMK </title>
    <link rel="stylesheet" href="BHMK.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
    <div class="bigImage">
    </div>
    <div class="imgContainer">
        <img src="BHMKimg/image (4).png" alt="" width="300px">
        <img src="BHMKimg/image (5).png" alt="" width="300px">
        <img src="BHMKimg/image (6).png" alt="" width="300px">
    </div>

    <div class="info">
        <h4 class="vanueName">BHMK Antipolo</h4>
        <h5 class="location">Unit 7, Pagrai Hills Subdivision, Overlooking. Brgy. Cupang Lower, Antipolo, Rizal</h5>
         <p class="number">Contact: 091 245 6689</p>
    </div>
    <p style="font-size: 40px; margin-left:350px;">About</p>
    <div class="description">
    <p>Offers a unique garden venue perfect for your special events and  celebrations. From intimate gatherings to grand affairs, our versatile  spaces cater to your every need. Whether you envision a romantic outdoor  garden reception, a cozy setting under the shade of a mango tree, or a  breathtaking experience on our skydeck, BHMK Antipolo provides the ideal  backdrop for unforgettable moments.</p>
    </div>
   <p style="margin: 50px 560px; font-weight:700; font-size:20px;">Prize: 800,000php</p>
   <button id="btnAvail">Avail</button>
   <footer id="contactUs">
            <div class="contactdescrip">
                <h3 class="contactVows">Vows & Veils Wedding</h3>
                <p class="contactdescript">Welcome to Vows & Veils your premier destination for seamless wedding reservations and planning! We understand that your wedding day is one of the most special moments in your life, and we're here to ensure that every aspect of your celebration is nothing short of perfection.</p>
            </div>
            <div class="contactInfo">
                <p class="contacttext">Contact Us</p>
                <div class="infocontact">
                    <img src="IconImages/location.png" alt="" width="50px"><label for="">2025 M Street, NW, Washington, DC, 20036</label> <br>
                    <img src="IconImages/telephone.png" alt="" width="50px"> <label for="">09991632930</label> <br> 
                    <img src="IconImages/mail.png" alt="" width="50px"><label for="">ar7459101@gmail.com</label>
            </div> 
            </div>
            <div class="linewhite">
            <p class="footerabout">@Vows & Veils Wedding 2024 </p> 
            <p class="footer2about">Copyright (c) 2024 Copyright Holder All Rights Reserved.</p>
       </div>
    </footer>
</body>
<script>
    const btn = document.getElementById('btnAvail');
    btn.addEventListener('click',()=>{
        window.location.assign('../addcart.php')
    })
</script>
</html>