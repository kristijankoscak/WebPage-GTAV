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

    <link rel="stylesheet" href="../styles/apanel.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/background.css">

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
            <div class="kontakt-block" style="height:15%;">
                <a href="./apanel.php"><p>White list</p></a>
            </div>
            <form name="logoff-form" method="POST" action="../system/logoff.php">
                <div class="login-block">
                    <button type="submit" name="btn" value="1">Odjavi se</button>
                </div>
            </form>
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
        
        <div class="wlc-container">
            <p>Dobrodošao <?php echo $_SESSION["user"];?> ! </p>
        </div>

        <div class="apanel-container" style="display:block;">
                <div class="message-list" id="ap-list">
                    <table>
                        <tr>
                            <th style="width:5%;">ID</th>
                            <th style="width:10%;">Date</th>
                            <th style="width:20%;">Ime, prezime</th>
                            <th style="width:15%;">Email</th>
                        <th>Poruka</a></th>
                        </tr>

                        <?php
                            include('../system/getMessages.php');
                            foreach ($results as $result){
                                echo "    
                                    <tr style='height:25%;'>
                                        <td>$result[0]</td>
                                        <td>$result[1]</td>
                                        <td>$result[2]</td>
                                        <td>$result[3]</td>
                                        <td>$result[4]</td>
                                    </tr>  
                                ";
                            }
                        ?>    
                    </table> 
                </div>
        </div>
        
        
    </div>
    <script type="text/javascript" src="../javascript/getDetails.js"></script>
    <script type="text/javascript" src="../javascript/slideApplication.js"></script>
    <script type="text/javascript" src="../javascript/slide-background.js"></script>
    
</body>
</html>