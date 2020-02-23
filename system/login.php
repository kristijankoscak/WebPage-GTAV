<?php
    if(isset($_POST['username'])){
        session_start();
        include('dbConnection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT username,password FROM admins WHERE username='$username' AND password='$password'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();

        if($results[0][0] == $username & $results[0][1] == $password){
            $_SESSION["loggedin"] = true;
            $_SESSION["user"] = $username;
            header("Location: ../pages/apanel.php");

        }
        else{
            header("Location: ../index.php");
        }
    }
    else{
        header("Location: ../index.php");
    }

?>