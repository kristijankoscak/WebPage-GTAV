<?php
    if (isset($_SESSION["loggedin"])) {
        include('dbConnection.php');
        $sql = "SELECT * FROM contactmessages";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        $conn = null;
    }
    else{
        header("Location: ../index.php");
    }
?>