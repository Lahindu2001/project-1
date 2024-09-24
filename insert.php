<?php
    require 'config.php';
    
    $userId = $_POST["userid"];
   $userName = $_POST["name"];
   $userEmail  = $_POST["email"];
   $userphone  = $_POST["phone"];
   $userAdress  = $_POST["address"];
   $userplanetype  = $_POST["planetype"];

   $sql = "INSERT INTO userdetail VALUES ('$userId','$userName','$userEmail','$userphone' , '$userAdress' ,'$userplanetype')";

   if($con->query($sql)){
    echo "insert done";
   }
   else{
    echo "Error".$con->error;
   }

   $con->close();
?>