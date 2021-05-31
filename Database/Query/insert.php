<?php
session_start();

if(isset($_POST['uname']) && isset($_POST['umessage']) && !empty($_POST['umessage'])){
    $_SESSION['success_message']="Thank You for your Time";
require_once "connect.php";

$sql="INSERT INTO queries
    SET 
    uname='".$_POST['uname']."',
    ucontact='".$_POST['ucontact']."',
    uemail='".$_POST['uemail']."',
    umessage='".$_POST['umessage']."'
";

$query=mysqli_query($conn,$sql);
if($query){
header("location: ../../index.php?id=5");
exit();
}
else{
    echo "Error";
}
}
else{
    $_SESSION['error_message']="Enter message Compulsarily";
    header("location: ../../index.php?id=5");
    exit();
}


?>