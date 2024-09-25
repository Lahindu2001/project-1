<?php
require 'config.php';

$nic =$_POST["delete"];

$sql ="DELETE from userdetail where User_ID ='$nic'";

if($con->query($sql)){
 
  
header("Location: http://localhost/admin/in.php");
exit(); 


}
else{
    echo "not sucess";
}

?>