<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burrow Cafe</title>
    <link rel="stylesheet" href="burrow.css">
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
        <img src="burrowImg/image (4).png" alt="" width="300px">
        <img src="burrowImg/image (5).png" alt="" width="300px">
        <img src="burrowImg/image (6).png" alt="" width="300px">
    </div>

    <div class="info">
        <h4 class="vanueName">Burrow Café at Antipolo Beehouse</h4>
        <h5 class="location">Beverly Hills Subdivision Antipolo</h5>
         <p class="number">Contact: 0917 622 9795</p>
    </div>
    <p style="font-size: 40px; margin-left:350px;">About</p>
    <div class="description">
    <p>One of Antipolo's best-kept secrets (it's literally a secret hideaway located underground), Burrow Café is a coffee shop and restaurant that also serves as a venue for intimate events and weddings. The restaurant has huge windows that open to verdant surroundings, perfect for couples who just love being close to nature</p>
    </div>
   <p style="margin: 50px 560px; font-weight:700; font-size:20px;">Prize: 950,000php</p>
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