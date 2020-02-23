<?php 
    session_start();
    if (isset($_SESSION['user'])) {
        
        include('getApplication.php');
        include('dbConnection.php');

        $id = $_POST["btn"];

        if($_POST['wl_status']==1){
            $sql = "UPDATE application SET status = 'Na čekanju' WHERE userID = $id";
        }
        if($_POST['wl_status']==3){
            $sql = "UPDATE application SET status = 'Odbijen' WHERE userID = $id";
        }
        if($_POST['wl_status']==2){
            $sql = "UPDATE application SET status = 'Prihvaćen' WHERE userID = $id";
        }
        $conn->exec($sql);

        header("Location: ../pages/apanel.php");
    }
    else{
        header("Location: ../index.php");
    }
?>