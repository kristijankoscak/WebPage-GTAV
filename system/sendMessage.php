<?php
    if(isset($_POST["namesurname"])){
        include('./dbConnection.php');

        $name = $_POST['namesurname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $date = date("d/m/Y");

        try {
            $sql = "INSERT INTO contactmessages (date, name, email,message)
            VALUES ('$date','$name','$email','$message')";
        
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