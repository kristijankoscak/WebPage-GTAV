<?php
   if(isset($_POST['username']) || isset($_SESSION["loggedin"]) || isset($_POST["namesurname"])){
      $servername ="localhost";
      $username ="root";
      $password ="";
      $database ="bg-whitelist";

      try {
         $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
         // set the PDO error mode to exception
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
   catch(PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
      }
   }
   else{
      header("Location: ../index.php");  
   }

?>