<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roy Tatel</title>
    <link rel="stylesheet" href="roytatel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
    <div class="photoGrapherdescript">
        <h1 class="namePhotographer">Roy Tatel Photography</h1>
        <div class="txtcontainer">
        <p class="description">
He started career in landscape photography and then eventually moved into architectural photography. I was amazed at the patterns that human hands could produce. I made it my mission to show more of it to the world.</p>
        </div>
    </div>
    <div class="Piccontainer">
        <img src="raytatel/image (2).png" alt="" height="400px">
        <img src="raytatel/image (3).png" alt="" height="400px">
        <img src="raytatel/image (4).png" alt="" height="400px">
    </div>
    <h1 class="pricing">PRICING   &    SERVICE</h1>
    <div class="price1">
            <ul>
                <li> 6h session</li>
                <li>Extra disc &  images</li>
                <li>9x10 Print</li>
                <li>Engagement  session</li>
                <li>200 edited digital photos</li>
                <li> 500 album creditt</li>
            </ul>
            <p class="price">₱ 5,500</p>
        </div>

        <button id="btnAvail">Avail</button>
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
    const btn = document.getElementById('btnAvail');
    btn.addEventListener('click',()=>{
        window.location.assign('../addcart.php')
    })
</script>
</html>