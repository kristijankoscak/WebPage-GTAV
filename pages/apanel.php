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
                <a href="./amessages.php"><p>Poruke</p></a>
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
        <div class="types-container">
            <div id="ap-slide" class="waiting-block">
                <a onclick="switchAppType(0)"><i class='fas fa-user-clock'></i></a>
            </div>
            <div id="ap-slide" class="accepted-block">
            <a onclick="switchAppType(1)"><i class='fas fa-user-check'></i></a>
                </div>
            <div id="ap-slide" class="denied-block">
                <a onclick="switchAppType(2)"><i class='fas fa-user-minus'></i></a>
            </div>
        </div>
        <div class="apanel-container-main"></div>
        <div class="apanel-container">
            <form name="save-form" method="POST" action="../system/save.php">
                <div class="application-list" id="ap-list">
                    <table>
                        <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Ime, prezime</th>
                        <th>Datum rođenja</th>
                        <th>Spol</a></th>
                        <th>Discord tag</th>
                        <th>Steam link</th>
                        <th>Save</th>
                        </tr>

                        <?php
                            include('../system/getApplication.php');
                            $temp = -1;
                            $type = "Na čekanju";
                            foreach ($results as $result){
                                $temp++;
                                echo "    
                                    <tr id=''>
                                        <td>$result[0]</td>
                                        <td>
                                            <select name='wl_status'>
                                                <option value='' selected disabled hidden>Status</option>
                                                <option value=1>Na čekanju</option>
                                                <option value=2>Prihvaćen</option>
                                                <option value=3>Odbijen</option>
                                            </select>
                                        </td>
                                        <td><a onclick='getDetailInfo($result[0])'>$result[1]</a></td>
                                        <td>$result[2]</td>
                                        <td>$result[7]</td>
                                        <td>$result[6]</td>
                                        <td>$result[5]</td>
                                        <td><button type='submit' name='btn' value=$result[0]><i class='fas fa-save'></i></button></td>
                                    </tr>  
                                ";
                            }
                        ?>    
                    </table> 
                </div>
            </form>
            
            
            <?php
                include('../system/getApplication.php');
                foreach ($results as $result){
                    echo "                
                        <div class='application-result' id='app-result-$result[0]'>
                            <div class='application-result-left'>
                                <span><b>GTA V iskustvo:</b></span>
                                <span >$result[3]</span>
                                <br>
                                <span><b>RP ocjena:</b></span>
                                <span >$result[4]</span>
                                <br>
                                <span><b>VDM pitanje:</b></span>
                                <span >$result[8]</span>
                                <br>
                                <span><b>RDM pitanje:</b></span>
                                <span >$result[9]</span>
                                <br>
                                <span><b>CL pitanje:</b></span>
                                <span>$result[10]</span>
                            </div>
                            <div class='application-result-right'>
                                <span><b>Fail RP pitanje:</b></span>
                                <span >$result[11]</span>
                                <br>
                                <span><b>MG pitanje:</b></span>
                                <span >$result[12]</span>
                                <br>
                                <span><b>Biografija:</b></span>
                                <span>$result[13]</span> 
                            </div>
                        </div>  
                    ";
                }
            ?> 
        </div>
        <div class="apanel-container">
            <form name="save-form" method="POST" action="../system/save.php">
                <div class="application-list" id="ap-list">
                    <table>
                        <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Ime, prezime</th>
                        <th>Datum rođenja</th>
                        <th>Spol</a></th>
                        <th>Discord tag</th>
                        <th>Steam link</th>
                        <th>Save</th>
                        </tr>

                        <?php
                            include('../system/getAcceptedApp.php');
                            $temp = -1;
                            $type = "Na čekanju";
                            foreach ($results as $result){
                                $temp++;
                                echo "    
                                    <tr id=''>
                                        <td>$result[0]</td>
                                        <td>
                                            <select name='wl_status'>
                                                <option value='' selected disabled hidden>Status</option>
                                                <option value=1>Na čekanju</option>
                                                <option value=2>Prihvaćen</option>
                                                <option value=3>Odbijen</option>
                                            </select>
                                        </td>
                                        <td><a onclick='getDetailInfo($result[0])'>$result[1]</a></td>
                                        <td>$result[2]</td>
                                        <td>$result[7]</td>
                                        <td>$result[6]</td>
                                        <td>$result[5]</td>
                                        <td><button type='submit' name='btn' value=$result[0]><i class='fas fa-save'></i></button></td>
                                    </tr>  
                                ";
                            }
                        ?>    
                    </table> 
                </div>
            </form>
            
            
            <?php
                include('../system/getAcceptedApp.php');
                foreach ($results as $result){
                    echo "                
                        <div class='application-result' id='app-result-$result[0]'>
                            <div class='application-result-left'>
                                <span><b>GTA V iskustvo:</b></span>
                                <span >$result[3]</span>
                                <br>
                                <span><b>RP ocjena:</b></span>
                                <span >$result[4]</span>
                                <br>
                                <span><b>VDM pitanje:</b></span>
                                <span >$result[8]</span>
                                <br>
                                <span><b>RDM pitanje:</b></span>
                                <span >$result[9]</span>
                                <br>
                                <span><b>CL pitanje:</b></span>
                                <span>$result[10]</span>
                            </div>
                            <div class='application-result-right'>
                                <span><b>Fail RP pitanje:</b></span>
                                <span >$result[11]</span>
                                <br>
                                <span><b>MG pitanje:</b></span>
                                <span >$result[12]</span>
                                <br>
                                <span><b>Biografija:</b></span>
                                <span>$result[13]</span> 
                            </div>
                        </div>  
                    ";
                }
            ?> 
        </div>
        <div class="apanel-container">
            <form name="save-form" method="POST" action="../system/save.php">
                <div class="application-list" id="ap-list">
                    <table>
                        <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Ime, prezime</th>
                        <th>Datum rođenja</th>
                        <th>Spol</a></th>
                        <th>Discord tag</th>
                        <th>Steam link</th>
                        <th>Save</th>
                        </tr>

                        <?php
                            include('../system/getDeniedApp.php');
                            $temp = -1;
                            $type = "Na čekanju";
                            foreach ($results as $result){
                                $temp++;
                                echo "    
                                    <tr id=''>
                                        <td>$result[0]</td>
                                        <td>
                                            <select name='wl_status'>
                                                <option value='' selected disabled hidden>Status</option>
                                                <option value=1>Na čekanju</option>
                                                <option value=2>Prihvaćen</option>
                                                <option value=3>Odbijen</option>
                                            </select>
                                        </td>
                                        <td><a onclick='getDetailInfo($result[0])'>$result[1]</a></td>
                                        <td>$result[2]</td>
                                        <td>$result[7]</td>
                                        <td>$result[6]</td>
                                        <td>$result[5]</td>
                                        <td><button type='submit' name='btn' value=$result[0]><i class='fas fa-save'></i></button></td>
                                    </tr>  
                                ";
                            }
                        ?>    
                    </table> 
                </div>
            </form>
            
            
            <?php
                include('../system/getDeniedApp.php');
                foreach ($results as $result){
                    echo "                
                        <div class='application-result' id='app-result-$result[0]'>
                            <div class='application-result-left'>
                                <span><b>GTA V iskustvo:</b></span>
                                <span >$result[3]</span>
                                <br>
                                <span><b>RP ocjena:</b></span>
                                <span >$result[4]</span>
                                <br>
                                <span><b>VDM pitanje:</b></span>
                                <span >$result[8]</span>
                                <br>
                                <span><b>RDM pitanje:</b></span>
                                <span >$result[9]</span>
                                <br>
                                <span><b>CL pitanje:</b></span>
                                <span>$result[10]</span>
                            </div>
                            <div class='application-result-right'>
                                <span><b>Fail RP pitanje:</b></span>
                                <span >$result[11]</span>
                                <br>
                                <span><b>MG pitanje:</b></span>
                                <span >$result[12]</span>
                                <br>
                                <span><b>Biografija:</b></span>
                                <span>$result[13]</span> 
                            </div>
                        </div>  
                    ";
                }
            ?> 
        </div>
        
    </div>
    <script type="text/javascript" src="../javascript/getDetails.js"></script>
    <script type="text/javascript" src="../javascript/slideApplication.js"></script>
    <script type="text/javascript" src="../javascript/slide-background.js"></script>
    
</body>
</html>