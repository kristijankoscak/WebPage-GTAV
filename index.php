<!DOCTYPE html>
<html lang="en">
<head>
    <title>Balkan Gaming GTAV RP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="../web/images/bg-logo-icon.png">

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/background.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <script type="text/javascript" src="javascript/navbar-control.js"></script>

</head>

<body>
    
    <img class="backgroundImagesSlide" src="./images/background-image1.jpg" >
    <img class="backgroundImagesSlide" src="./images/background-image2.jpg" >
    <img class="backgroundImagesSlide" src="./images/background-image3.jpg" >

    <div class="main-container">
        <div id="NavigationBar" class="navbar-block">
            <div class="close-menu"> 
                <a onclick="closeNav()">&#x02717;</a>
            </div>
            <div class="logo-block"></div>
            <form name="login-form" method="POST" action="system/login.php">
                <div class="login-block">
                    <p>Korisničko ime:</p>
                    <input type="text" id="fname" name="username" style="height: 20%;">
                    <p>Lozinka:</p>
                    <input type="password" id="fname" name="password" style="height: 20%;">
                    <button type="submit" name="btn" value="1">Prijavi se</button>
                </div>
            </form>
            <div class="kontakt-block">
                <a href="pages/contact.php"><p>Kontaktiraj nas!</p></a>
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

        <form name="application-form" method="POST" action="./system/sendApplication.php">
            <div class="wl-container">
                <div class="wl-welcome-header">
                    <h2>Dobro došli na Balkan Gaming! Ispunite white listu. &#128513</h2>
                </div>
                <div class="wl-info-grid">  
                    <div class="wl-info">
                        <p>Ime i prezime:</p>
                        <input type="text" id="fname" name="namesurname" required> 
                        <p>Datum rođenja:</p>
                        <input type="date" id="fname" name="date" required>
                        <p>Koliko dugo igrate GTA V:</p>
                        <input type="text" id="fname" name="expirience" required>
                        <p>Ocijenite svoj RP:</p>
                        <input type="text" id="fname" name="rpgrade" placeholder="1-5" required>
                        <p>Steam link:</p>
                        <input type="text" id="fname" name="steamlink" required>
                        <p>Discord Tag:</p>
                        <input type="text" id="fname" name="discordtag" placeholder="Nick#1241" required>
                        <p>Spol:</p>
                        <input type="text" id="fname" name="gender" placeholder="Musko/Zensko" required>
                    </div>
                    <div class="wl-info">
                        <p>Objasnite,svojim riječima što je VDM:</p>
                        <textarea id ="" rows="3" name="vdm_answer" required></textarea>
                        <p>Objasnite,svojim riječima što je RDM:</p>
                        <textarea id ="" rows="3" name="rdm_answer" required></textarea>
                        <p>Objasnite,svojim riječima što je CL:</p>
                        <textarea id ="" rows="3" name="cl_answer" required></textarea>
                        <p>Objasnite,svojim riječima što je fail RP:</p>
                        <textarea id ="" rows="3" name="failrp_answer" required></textarea>
                        <p>U IC kontekstu, što je MG:</p>
                        <input type="checkbox" name="streamsnipe" value="stream snipe">
                        <label for="vehicle1"> stream snipe</label><br><br>
                        <input type="checkbox" name="ic_ooc" value="miješanje IC i OOC">
                        <label for="vehicle1"> miješanje IC i OOC</label><br><br>
                        <input type="checkbox" name="pg" value="radnje koje nisu moguće u RL">
                        <label for="vehicle1"> radnje koje nisu moguće u RL</label><br><br>
                        <input type="checkbox" name="all" value="sve od navedenog">
                        <label for="vehicle1"> sve od navedenog</label><br><br>
                    </div>
                    <div class="wl-info" >
                        <p>U ovom odjeljku napišite biografiju vašeg karaktera u igri! Ukratko nam navedite osobine, 
                            što radi u slobodno vrijeme, čime se bavi itd... </p>
                        <textarea id ="" rows="5" style="height: 30%; max-height: 60%;" name="biography" required></textarea>

                        <div class="wl-info-submit">
                           <button type="submit" onclick="" value="Submit">Pošalji!</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    

    <script type="text/javascript" src="javascript/slide-background.js"></script>
</body>
</html>