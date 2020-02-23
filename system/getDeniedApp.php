<?php
    if (isset($_SESSION["loggedin"])) {
        include('dbConnection.php');
        $sql = "SELECT * FROM application WHERE status = 'Odbijen' ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        $conn = null;
    }
    else{
        header("Location: ../index.php");
    }
?>