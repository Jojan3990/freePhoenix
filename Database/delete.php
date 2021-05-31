<?php
require_once "connect.php";
$id=$_GET['id'];
$sql= "UPDATE comment_here set udelete=1 where uuid=".$id;
$query=mysqli_query($conn,$sql);
if($query){
    header("location: ../blogs/pep1.php");
    exit();
    }
    else{
        echo "Error";
    }
?>