<?php 
    session_start(); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Balkan Gaming</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="../images/bg-logo-icon.png">

    <link rel="stylesheet" href="../styles/background.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/contact.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script type="text/javascript" src="../javascript/navbar-control.js"></script>

</head>

<body>  
    <img class="backgroundImagesSlide" src="../images/background-image1.jpg" >
    <img class="backgroundImagesSlide" src="../images/background-image2.jpg" >
    <img class="backgroundImagesSlide" src="../images/background-image3.jpg" >

    <div class="main-container">
        
        <div id="NavigationBar" class="navbar-block">
            <div class="close-menu"> 
                <a onclick="closeNav()">&#x02717;</a>
            </div>
            <div class="logo-block"></div>
            <div class="kontakt-block">
                <a href="../index.php"><p>Naslovna</p></a>
            </div>
            <div class="scm-block">
                <a href="#" class="fa instagram">
                    <i class="instagram-logo"> </i>
                </a>
                <a href="#" class="fa discord">
                    <i class="discord-logo"> . </i>
                </a>
            </div>
            <div class="cp-block">
                <p class="cpright-text" style="margin-top: 7%;">&#x24B8; 2020.</p>
                <p class="cpright-text">Gefufna Design</p>
            </div>
        </div>
       
        
        <span id="openIcon" class="open-menu" onclick="openNav()">&#9776;</span>
        <form name="message-form" method="POST" action="../system/sendMessage.php">
            <div class="contact-container">
                <div class="contact-welcome-header">
                    <h2>Slobodno nas kontaktirajte! &#128513</h2>
                </div>
                <div class="contact-container-main">
                    <p>Ime i prezime:</p>
                    <input type="text" id="fname" name="namesurname" required> 
                    <p>Email:</p>
                    <input type="email" id="fname" name="email" required>
                    <textarea id ="" rows="5" name="message" required></textarea>
                </div>
                <button class="contact-btn" type="submit" onclick="" value="Submit">&#128231</button>

            </div>
        </form>
    </div>
    <script type="text/javascript" src="../javascript/getDetails.js"></script>
    <script type="text/javascript" src="../javascript/slideApplication.js"></script>
    <script type="text/javascript" src="../javascript/slide-background.js"></script>
    
</body>
</html>