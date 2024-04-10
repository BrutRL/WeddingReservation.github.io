<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emerald</title>
    <link rel="stylesheet" href="emerald.css">
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
        <img src="EmeraldImg/image (4).png" alt="" width="300px">
        <img src="EmeraldImg/image (5).png" alt="" width="300px">
        <img src="EmeraldImg/image (6).png" alt="" width="300px">
    </div>

    <div class="info">
        <h4 class="vanueName">The Emerald Events Place</h4>
        <h5 class="location">H598+R3G, Cabrera Rd, Antipolo, Rizal</h5>
         <p class="number">Contact: 091 245 6689</p>
    </div>
    <p style="font-size: 40px; margin-left:350px;">About</p>
    <div class="description">
    <p>Nestled on top of a hill, amidst lush greens in scenic Antipolo, The Emerald  offers a majestic view of the Metro Manila skyline from Makati, to BGC,  to Ortigas, as well as both Laguna de Bay and Manila Bay that makes for  a truly magnificent sunset spectacle.</p>
    </div>
   <p style="margin: 50px 560px; font-weight:700; font-size:20px;">Prize: 750,000php</p>
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