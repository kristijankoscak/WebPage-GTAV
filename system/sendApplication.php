<?php
    if(isset($_POST["namesurname"])){
        include('./dbConnection.php');
        $mg_answer =""; 
        $namesurname = $_POST['namesurname'];
        $date =   $_POST['date'];
        $expirience =  $_POST['expirience'];
        $rpgrade = $_POST['rpgrade'];
        $steamlink = $_POST['steamlink'];
        $discordtag = $_POST['discordtag'];
        $gender = $_POST['gender'];
        $vdm_answer = $_POST['vdm_answer'];
        $rdm_answer = $_POST['rdm_answer'];
        $cl_answer = $_POST['cl_answer'];
        $failrp_answer = $_POST['failrp_answer'];
        if(isset($_POST['streamsnipe'])){
            $mg_answer =  $mg_answer . " stream snipe |" ;
        }
        if(isset($_POST['pg'])){
            $mg_answer =  $mg_answer . " radnje koje nisu moguće u RL | " ;
        }
        if(isset($_POST['ic_ooc'])){
            $mg_answer =  $mg_answer . " miješanje IC i OOC | " ;
        }
        if(isset($_POST['all'])){
            $mg_answer =  $mg_answer . " sve od navedenog | " ;
        }
        else{
            $mg_answer =  $mg_answer . " Ništa nije odabrano! " ;
        }
        $biography = $_POST['biography'];
        
        try {
            $sql = "INSERT INTO application (ime_prezime, datum, gtav_iskustvo,rp_ocjena,steamID,discordTag,
            spol,vdm_pitanje,rdm_pitanje,cl_pitanje,failRP_pitanje,mg_pitanje,biografija,status)
            VALUES ('$namesurname','$date','$expirience','$rpgrade','$steamlink','$discordtag','$gender','$vdm_answer','$rdm_answer','$cl_answer','$failrp_answer','$mg_answer','$biography','Na čekanju')";
        
        $conn->exec($sql);
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        header("Location: ../index.php");  
    }
    else{
        header("Location: ../index.php");  
    }

?>